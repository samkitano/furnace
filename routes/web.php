<?php

use App\Http\Controllers\Admin\UsersController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/docs', function () {
    return view('docs');
});

Auth::routes(['register' => false]);

Route::get('/admin', 'AdminController@index')->name('admin');

Route::group([
    'as'         => 'Admin::',
    'prefix'     => 'admin',
    'middleware' => 'auth',
], function () {
    Route::resource('/users', 'Admin\\UsersController');
});
