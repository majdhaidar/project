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
// app()->bind('example', function(){
//     return new App\Example();
// });
app()->singleton('App\Foo', function(){
    return new App\Foo();
});
Route::get('/', function(){
    dd(app(App\Example::class));
});

Route::resource('projects', 'ProjectsController');
Route::resource('tasks', 'TasksController');
Route::post('/projects/{project}/task', 'ProjectTasksController@store');