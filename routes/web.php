<?php

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

Route::get('/tasks', 'TasksController@index');

Route::get('/tasks/{task}','TasksController@show');

/*Route::get('/', function () {
    $name = 'hasan';
    return view('welcome',compact('name'));
});*/

/*Route::get('/', function () {
    $name = 'hasan';
    return view('welcome',['name' => $name]);
});*/


/*Route::get('/', function () {
    return view('welcome')->with('name','World');
});*/

/*Route::get('/', function () {
    return view('welcome', [
        'name' => 'teri meri',
    ]);
});*/

Route::get('/about', function () {
    return view('about');
});
