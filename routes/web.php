<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
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
Route::group(['middleware' => 'myguest'], function () {

    Route::get('/', [UserController::class, 'index']);
    Route::get('/login', [UserController::class, 'showLogin']);
    Route::post('/login', [UserController::class, 'login']);
    Route::get('/signup', [UserController::class, 'showsignup']);
    Route::post('/signup', [UserController::class, 'signup']);



});


Route::group(['middleware' => 'myauth'], function () {


    Route::get('/appointment', [UserController::class, 'showappointment']);
    Route::post('/appointment', [UserController::class, 'appointment']);
    Route::get('/doctors', [UserController::class, 'showdoctors']);
    Route::post('/doctors', [UserController::class, 'doctors']);
    Route::get('/departments', [UserController::class, 'showdepartments']);
    Route::post('/departments', [UserController::class, 'departments']);
    Route::get('/radiologyupload', [UserController::class, 'showradiologyupload']);
    Route::post('/radiologyupload', [UserController::class, 'radiologyupload']);
    Route::get('/logout', [UserController::class, 'logout']);
    Route::get('/ThankSignup', [PostController::class, 'showThankSignup']);
    Route::get('/ThankAppointment', [PostController::class, 'showThankAppointment']);

});

