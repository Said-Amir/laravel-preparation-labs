<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AboutFactController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TitreController;
use App\Models\About;
use App\Models\Home;
use App\Models\Titre;
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
    $about = About::first();
    $home = Home::first();
    $titres = Titre::all();
    return view('home', compact('home', 'about', 'titres'));
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::resource('/home', HomeController::class);
Route::resource('/about', AboutController::class);
Route::resource('/aboutFact', AboutFactController::class);
Route::resource('/titre', TitreController::class);
Route::resource('/feature', FeatureController::class);
Route::resource('/service', ServiceController::class);