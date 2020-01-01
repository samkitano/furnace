<?php

namespace App\Http\Controllers\Admin;

use App\Subfamily;
use App\Util\Icons;
use App\Util\DB\TableAnalyzer;
use App\Http\Requests\StoreSubfamily;
use App\Http\Requests\UpdateSubfamily;
use App\Util\Notifications\Notifier;
use App\Http\Controllers\Controller;

class SubfamiliesController extends Controller
{
    /**
     * SubfamiliesController constructor.
     */
    public function __construct()
    {
        $this->model = new Subfamily();
        $this->analyzer = new TableAnalyzer($this->model);
        $this->fields = $this->analyzer->describe();
        $this->single = 'Subfamily';
        $this->resource = 'subfamilies';
        $this->icon = Icons::_ICON_SUBFAMILY_;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dt = str_replace('3,', '2,', $this->dtDefs);

        return view('admin.resource.index', [
            'data' => $this->model->all(),
            'resource' => $this->resource,
            'single' => $this->single,
            'icon' => $this->icon,
            'fields' => $this->fields,
            'dt' => $dt,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Notifier::notifyRequired();

        return view('admin.resource.create', [
            'data' => null,
            'resource' => $this->resource,
            'single' => $this->single,
            'icon' => $this->icon,
            'fields' => $this->fields,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\StoreSubfamily|\Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreSubfamily $request)
    {
        $validatedData = $request->validated();

        $record = $this->model->create($validatedData);

        if (isset($record->name)) {
            Notifier::notifySuccess("{$this->single} «{$record->name}» created!");
        } else {
            Notifier::notifySuccess("{$this->single} #{$record->id} created!");
        }

        return redirect()->route("Admin::{$this->resource}.index");
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
            'data' => $this->model->find($id),
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
        Notifier::notifyRequired();

        $data = $this->model->find($id);

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
     * @param \App\Http\Requests\UpdateSubfamily|\Illuminate\Http\Request $request
     * @param  int $id
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateSubfamily $request, $id)
    {
        $validatedData = $request->validated();

        $record = $this->model->find($id);
        $record->update($validatedData);

        Notifier::notifySuccess("{$this->single} «{$record->name}» updated!");

        return redirect()->route("Admin::{$this->resource}.index");
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
        $this->model->destroy($id);

        Notifier::notifySuccess("{$this->single} #{$id} deleted!");

        return redirect()->route("Admin::{$this->resource}.index");
    }
}
