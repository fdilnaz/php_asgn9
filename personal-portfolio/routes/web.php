<?php

use App\Http\Controllers\AboutmeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\projectsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [HomeController::class, 'page']);
//Route::get('/about', [AboutmeController::class, 'page']);
//Route::get('/projects', [projectsController::class, 'page']);
//Route::get('/contact', [ContactController::class, 'page']);

