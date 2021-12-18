<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\DynamicPdf;

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
    return view('login');
});

Route::get('/users', [ApiController::class, 'getUsers']);
Route::get('/events', [ApiController::class, 'getEvents']);
Route::get('/login-email', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});

Route::get('/create-event-page', [ApiController::class, 'createEventPage']);

Route::post('/login', [ApiController::class, 'login']);
Route::post('/register-user', [ApiController::class, 'register']);

Route::post('/add-event', [ApiController::class, 'addEvent']);
Route::get('/generate-pdf', [ApiController::class, 'generatePdf']);
Route::get('/download-pdf', [ApiController::class, 'downloadPdf']);
