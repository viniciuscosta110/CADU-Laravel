<?php

use Illuminate\Support\Facades\Route;

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

//importar controllers
use App\Http\Controllers\loginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ResearchController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\ExtensionController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/create/home', [HomeController::class, 'create']);
Route::post('/create/home', [HomeController::class, 'store']);

Route::get('/teachers', [TeacherController::class, 'index']);

Route::get('/researchs', [ResearchController::class, 'index']);

Route::get('/courses', function () {
    return view('courses');
});

Route::get('/details', function () {
    return view('details');
});

Route::get('/extensions', [ExtensionController::class, 'index']);

Route::get('/login',[loginController::class, 'index']);
Route::post('/login',[loginController::class, 'login']);

Route::get('/subjects', function () {
    return view('subjects');
});