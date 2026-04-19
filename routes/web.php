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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('portfolio');
});

// Project Routes - Add these
Route::get('/project/portfolio', function () {
    return view('projects.portfolio');
})->name('project.portfolio');

Route::get('/project/capstone', function () {
    return view('projects.capstone');
})->name('project.capstone');

Route::get('/project/ui-design', function () {
    return view('projects.ui-design');
})->name('project.ui-design');