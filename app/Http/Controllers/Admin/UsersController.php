<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    /** @var string */
    protected $resource = 'users';
    protected $single = 'User';

    /** @var array */
    protected $icons = [
        'index' => 'mdi mdi-account-multiple',
        'create' => 'mdi mdi-account-plus',
    ];
    protected $fields = [
        'name' => 'Name',
        'email' => 'Email',
        'created_at' => 'Since',
    ];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.resource.index', [
            'data' => User::all(),
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
            'data' => User::all(),
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
            'data' => User::all(),
            'resource' => $this->resource,
            'single' => $this->single,
            'icons' => $this->icons,
            'fields' => $this->fields,
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
            'data' => User::all(),
            'resource' => $this->resource,
            'single' => $this->single,
            'icons' => $this->icons,
            'fields' => $this->fields,
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
