<?php

namespace App\Http\Controllers\Admin;

use App\Family;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FamiliesController extends Controller
{
    /** @var string */
    protected $resource = 'families';
    protected $single = 'Family';

    /** @var array */
    protected $icons = [
        'index' => 'mdi mdi-source-branch',
        'create' => 'mdi mdi-source-pull',
    ];
    protected $fields = [
        'name' => 'Name',
        'description' => 'Description',
        'created_at' => 'Created',
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
            'icons' => $this->icons,
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
        return view('admin.resource.create', [
            'data' => Family::all(),
            'resource' => $this->resource,
            'single' => $this->single,
            'icons' => $this->icons,
            'fields' => $this->fields,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.resource.edit', [
            'data' => Family::all(),
            'resource' => $this->resource,
            'single' => $this->single,
            'icons' => $this->icons,
            'fields' => $this->fields,
            'id' => $id,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.resource.edit', [
            'data' => Family::all(),
            'resource' => $this->resource,
            'single' => $this->single,
            'icons' => $this->icons,
            'fields' => $this->fields,
            'id' => $id,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
