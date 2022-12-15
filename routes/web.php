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


Route::get('/', function () {
    return view('index');
});

Route::get('/teachers', function () {
    return view('teachers');
});

Route::get('/researchs', function () {
    return view('researchs');
});

Route::get('/courses', function () {
    return view('courses');
});

Route::get('/details', function () {
    return view('details');
});

Route::get('/extensions', function () {
    return view('extensions');
});

Route::get('/login', [loginController::class, 'index']);
Route::post('/login',[loginController::class, 'login']);

Route::get('/subjects', function () {
    return view('subjects');
});