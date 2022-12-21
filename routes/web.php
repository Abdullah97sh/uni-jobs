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

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/job-details', function () {
    return view('job-details');
});

Route::get('/profile', function () {
    return view('profile');
});


Route::get('/add-job', function () {
    return view('add-job');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/admin-index', function () {
    return view('admin.index');
});
