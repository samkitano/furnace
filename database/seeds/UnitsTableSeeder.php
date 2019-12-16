<?php

use Illuminate\Database\Seeder;

class UnitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('units')->truncate();

        $model = new \App\Unit();
        $model->name = 'ml';
        $model->description = 'Metro linear';
        $model->save();

        $model = new \App\Unit();
        $model->name = 'm2';
        $model->description = 'Metro quadrado';
        $model->save();

        $model = new \App\Unit();
        $model->name = 'm3';
        $model->description = 'Metro cúbico';
        $model->save();

        $model = new \App\Unit();
        $model->name = 'kg';
        $model->description = 'Kilograma';
        $model->save();

        $model = new \App\Unit();
        $model->name = 'lt';
        $model->description = 'litro';
        $model->save();

        $model = new \App\Unit();
        $model->name = 'un';
        $model->description = 'Unidade';
        $model->save();

        $model = new \App\Unit();
        $model->name = 'mm';
        $model->description = 'Milímetro';
        $model->save();

        $model = new \App\Unit();
        $model->name = 'cm';
        $model->description = 'Centímetro';
        $model->save();
    }
}
