<?php

namespace App\Console\Commands;

use Illuminate\Support\Str;
use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;

class FurnaceController extends Command
{
    /**
     * The filesystem instance.
     *
     * @var \Illuminate\Filesystem\Filesystem
     */
    protected $files;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:crud {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new FurnAce controller class';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'Controller';

    /** @var string */
    protected $stub = '';
    protected $baseName = '';

    /** @var bool */
    protected $hasModel = true;

    /**
     * Create a new command instance.
     *
     * @param \Illuminate\Filesystem\Filesystem $files
     */
    public function __construct(Filesystem $files)
    {
        parent::__construct();

        $this->files = $files;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->baseName = Str::ucfirst($this->argument('name'));

        $this->checkForModel()
             ->loadStub()
             ->replaceNamespace()
             ->replaceModelNamespace()
             ->replaceClassName()
             ->replaceModelName()
             ->replaceResource()
             ->replaceIcon()
             ->saveNewController()
             ->updateModel()
             ->createRequests();

        return true;
    }

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub(): string
    {
        return __DIR__ . '/stubs/controller.stub';
    }

    /**
     * Get the default namespace for the class.
     *
     * @return string
     */
    protected function getDefaultNamespace(): string
    {
        return $this->getAppNamespace() . 'Http\\Controllers\\Admin';
    }

    /**
     * Get the default App namespace
     *
     * @return string
     */
    protected function getAppNamespace(): string
    {
        return $this->laravel->getNamespace();
    }

    /**
     * @return $this
     */
    protected function replaceModelName()
    {
        $this->stub = str_replace(
            'DummyModel',
            $this->baseName,
            $this->stub
        );

        return $this;
    }

    /**
     * @return $this
     */
    protected function updateModel()
    {
        if (! $this->hasModel) {
            return $this;
        }

        $modelPath = $this->getModelNamespace() . '.php';
        $model = $this->files->get($modelPath);
        $stub = $this->files->get(__DIR__ . '/stubs/model-variables.stub');

        $model = str_replace('{', $stub, $model);

        $this->files->put($modelPath, $model);

        $this->info('Model properties declared! Fill them!');

        return $this;
    }

    /**
     * @return $this
     */
    protected function createRequests()
    {
        \Artisan::call('make:request', ['name' => "Store{$this->baseName}"]);
        \Artisan::call('make:request', ['name' => "Update{$this->baseName}"]);

        $this->info('Store and Update Requests created!');

        $this->updateRequests();

        return $this;
    }

    protected function updateRequests()
    {
        $requestStorePath = $this->getAppNamespace() . 'Http\\Requests\\' . "Store{$this->baseName}" . '.php';
        $requestUpdatePath = $this->getAppNamespace() . 'Http\\Requests\\' . "Update{$this->baseName}" . '.php';
        $requestStore = $this->files->get($requestStorePath);
        $requestUpdate = $this->files->get($requestUpdatePath);
        $use = 'use Illuminate\Support\Facades\Auth;' . PHP_EOL . 'use Illuminate\Foundation\Http\FormRequest;';

        $requestStore = str_replace('use Illuminate\Foundation\Http\FormRequest;', $use, $requestStore);
        $requestStore = str_replace('return false;', 'return Auth::check();', $requestStore);

        $requestUpdate = str_replace('use Illuminate\Foundation\Http\FormRequest;', $use, $requestUpdate);
        $requestUpdate = str_replace('return false;', 'return Auth::check();', $requestUpdate);

        $this->files->put($requestStorePath, $requestStore);
        $this->info('Store Request updated!');

        $this->files->put($requestUpdatePath, $requestUpdate);
        $this->info('Update Request updated!');

        return $this;
    }

    /**
     * @return $this
     */
    protected function checkForModel()
    {
        $model = $this->getModelNamespace() . $this->baseName . '.php';

        if($this->files->exists($model)) {
            return $this;
        }

        $this->hasModel = false;

        $this->info("Model '" . $this->baseName. "' not found.");

        if ($this->confirm('Would you like to create the model?')) {
            \Artisan::call('make:model', ['name' => $this->baseName]);
            $this->hasModel = true;
            $this->info('Model created!');
        } else {
            $this->warn('Remember to declare public variables "indexable", "editable" and "creatable" in your model!');
        }

        return $this;
    }

    /**
     * @return $this
     */
    protected function saveNewController()
    {
        $destination = $this->getDefaultNamespace()
            . '\\'
            . $this->baseName
            . $this->type
            . '.php';

        $this->files->put($destination, $this->stub);

        $this->info('Controller created!');

        return $this;
    }

    /**
     * @return string
     */
    protected function getModelNamespace()
    {
        return $this->getAppNamespace() . Str::ucfirst($this->argument('name'));
    }

    /**
     * @return $this
     */
    protected function loadStub()
    {
        $this->stub = $this->files->get($this->getStub());

        return $this;
    }

    /**
     * @return $this
     */
    protected function replaceIcon()
    {
        $this->stub = str_replace(
            'DummyIcon',
            '_ICON_' . Str::upper($this->baseName) . '_',
            $this->stub
        );

        return $this;
    }

    /**
     * @return $this
     */
    protected function replaceResource()
    {
        $this->stub = str_replace(
            'DummyPlural',
            strtolower(Str::plural($this->baseName)),
            $this->stub
        );

        return $this;
    }

    /**
     * @return $this
     */
    protected function replaceClassName()
    {
        $this->stub = str_replace(
            'DummyClass',
            Str::plural($this->baseName) . $this->type,
            $this->stub
        );

        return $this;
    }

    /**
     * @return $this
     */
    protected function replaceNamespace()
    {
        $this->stub = str_replace(
            'DummyNamespace',
            $this->getDefaultNamespace(),
            $this->stub
        );

        return $this;
    }

    /**
     * @return $this
     */
    protected function replaceModelNamespace()
    {
        $this->stub = str_replace(
            'DummyFullModelClass',
            $this->getModelNamespace(),
            $this->stub
        );

        return $this;
    }
}
