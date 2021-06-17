<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AboutFactController;
use App\Http\Controllers\HomeController;
use App\Models\Home;
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

Route::get('/', function () {
    $home = Home::first();
    return view('home', compact('home'));
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::resource('/home', HomeController::class);
Route::resource('/about', AboutController::class);
Route::resource('/aboutFact', AboutFactController::class);