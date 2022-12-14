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

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ResearchController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/teachers', function () {
    return view('teachers');
});

Route::get('/researchs', [ResearchController::class, 'index']);

Route::get('/courses', function () {
    return view('courses');
});

Route::get('/details', function () {
    return view('details');
});

Route::get('/extensions', function () {
    return view('extensions');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/subjects', function () {
    return view('subjects');
});