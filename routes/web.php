<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\SavedController;
use Illuminate\Routing\RouteGroup;
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

Route::get('/jobs', [JobController::class, 'index']);

Route::get('/jobs/{id}', [JobController::class, 'show']);


Route::middleware(['auth'])->group(function () {
    Route::get('/save-job/{id}', [SavedController::class, 'store']);
});



Route::get('/signup', function () {
    return view('signup');
});

Route::get('/login', function () {
    return view('login');
});

Route::post('/register', [AuthController::class, 'register']);

Route::post('/login', [AuthController::class, 'login']);

Route::get('/logout', [AuthController::class, 'logout']);

Route::post('/add-job', [JobController::class, 'store']);


Route::get('/admin-index', function () {
    return view('admin.index');
});
