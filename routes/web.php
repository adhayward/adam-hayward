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

use App\Http\Controllers\Controller;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskController;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;

Route::group(['middleware' => ['web']], function () {
    Route::get('/', [Controller::class, 'show']);

    Route::get('/personal', [Controller::class, 'personal']);
    Route::get('/contact', [Controller::class, 'contact']);
    Route::get('/contact-submit', [Controller::class, 'contactSubmit']);
    
    Route::get('projects/uniform', [ProjectController::class, 'uniform']);
    Route::get('projects/booking', [ProjectController::class, 'booking']);
    Route::get('projects/b2b', [ProjectController::class, 'b2b']);
    Route::get('projects/order', [ProjectController::class, 'order']);
    Route::get('projects/warehouse', [ProjectController::class, 'warehouse']);
    Route::get('projects/survey', [ProjectController::class, 'survey']);
    
    /**
     * Display All Tasks
     */
    //Route::get('/tasks', [TaskController::class, 'show']);
    
    /**
     * Add A New Task
     */
    //Route::post('/tasks/create', [TaskController::class, 'create']);
    
    /**
     * Delete An Existing Task
     */
    //Route::delete('/tasks/delete/{id}', [TaskController::class, 'delete']);
});