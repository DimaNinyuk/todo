<?php

use App\Http\Controllers\ProjectController;
use App\Project;
use Illuminate\Support\Facades\Route;
use App\Task;

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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index');


Route::get('/authblade', function () {
    return view('layouts.auth');
});
Route::get('/all-project', 'ProjectController@allProject');
Route::get('/details-project/{id}','ProjectController@detailProject');
Route::get('/edit-project/{id}','ProjectController@editProject');
Route::post('/update-project','ProjectController@updateProject');
Route::post('/add-role','RoleController@addRole');
Route::post('/update-status-project','StatusController@updateProjectStatuses');
Route::post('/delete-project','ProjectController@deleteProject');
Route::get('/сompleted-project','ProjectController@completedProject');
Route::get('/comment/{id}','CommentController@getComment');
Route::post('/add-comment','CommentController@addComment');
Route::get('/unfulfilled-project','ProjectController@unfulfilledProject');
Route::get('/change-profile','HomeController@changeProfile');
Route::post('/change-profile','HomeController@updateProfile');
Route::get('/new-project', 'ProjectController@newProject');
Route::post('/new-project','ProjectController@addProject');
Route::post('/new-task','TaskController@addTask');

