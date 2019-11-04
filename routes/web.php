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
/**
 * GET /projects (index)
 * GET /projects/create (create)
 * GET /projects/edit/{id} (edit)
 * GET /projects/show/{id} (show)
 * POST /projects (save)
 * PATCH /projects/{id} (update)
 * DELETE /projects/{id} (destroy)
 */
Route::get('/','PagesController@home');

Route::get('/contact', 'PagesController@contact');

Route::get('/about','PagesController@aboutUs');

///projects
// Route::get('/projects','ProjectsController@index');
// Route::get('/projects/create','ProjectsController@create');
// Route::get('/projects/show/{project}','ProjectsController@show');
// Route::get('/projects/{project}/edit','ProjectsController@edit');
// Route::patch('/projects/{project}','ProjectsController@update');
// Route::delete('/projects/{project}','ProjectsController@destroy');
// Route::post('/projects','ProjectsController@store');
//REPLACE ALL THE ABOVE WITH
Route::resource('projects', 'ProjectsController');
Route::resource('tasks', 'TasksController');