<?php

namespace App\Http\Controllers\Admin;

use App\Family;
use App\Http\Requests\StoreFamily;
use App\Http\Requests\UpdateFamilyPost;
use App\Util\Icons;
use App\Util\Notifications\Notifier;
use App\Http\Controllers\Controller;

class FamiliesController extends Controller
{
    /** @var string */
    protected $single = 'Family';
    protected $resource = 'families';
    protected $icon = Icons::_ICON_FAMILIES_;

    /** @var array */
    protected $fields = [
        'name' => [
            'label' => 'Name',
            'type' => 'text',
            'required' => true,
            'indexable' => true,
            'creatable' => true,
            'editable' => true,
        ],
        'description' => [
            'label' => 'Description',
            'type' => 'text',
            'required' => false,
            'indexable' => true,
            'creatable' => true,
            'editable' => true
        ],
        'created_at' => [
            'label' => 'Created',
            'type' => 'date_time',
            'required' => false,
            'indexable' => true,
            'creatable' => false,
            'editable' => false
        ],
    ];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.resource.index', [
            'data' => Family::all(),
            'resource' => $this->resource,
            'single' => $this->single,
            'icon' => $this->icon,
            'fields' => $this->fields,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Notifier::notifyInfo("Campos com * são obrigatórios.");

        return view('admin.resource.create', [
            'data' => Family::all(),
            'resource' => $this->resource,
            'single' => $this->single,
            'icon' => $this->icon,
            'fields' => $this->fields,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\StoreFamily|\Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreFamily $request)
    {
        $validatedData = $request->validated();

        $record = Family::create($validatedData);

        Notifier::notifySuccess("Family «{$record->name}» created!");

        return redirect()->route('Admin::families.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.resource.edit', [
            'data' => Family::find($id),
            'resource' => $this->resource,
            'single' => $this->single,
            'icon' => $this->icon,
            'fields' => $this->fields,
            'id' => $id,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Family::find($id);

        return view('admin.resource.edit', [
            'data' => $data,
            'resource' => $this->resource,
            'single' => $this->single,
            'icon' => $this->icon,
            'fields' => $this->fields,
            'id' => $id,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\UpdateFamilyPost|\Illuminate\Http\Request $request
     * @param  int $id
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateFamilyPost $request, $id)
    {
        $validatedData = $request->validated();

        $record = Family::find($id);
        $record->update($validatedData);

        Notifier::notifySuccess("Family «{$record->name}» updated!");

        return redirect()->route('Admin::families.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
