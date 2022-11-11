<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
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



Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/', function(){
    return view('welcome');
});

Route::get('/admin', [HomeController::class, 'index']);

Route::get('/addpatient', [AdminController::class, 'index']);

Route::post('/uploadpatient', [AdminController::class, 'uploadpatient']);

Route::get('/showpatient', [AdminController::class, 'showpatient']);

Route::get('/deletepatient/{id}', [AdminController::class, 'deletepatient']);

Route::get('/updatepatient/{id}', [AdminController::class, 'updatepatient']);

Route::post('/uploadpatient/{id}', [AdminController::class, 'uploadpatients']);

Route::post('/rendezvous', [HomeController::class, 'rendezvous']);

Route::post('/contact', [HomeController::class, 'contact']);

Route::get('/rangement', [AdminController::class, 'rangement']);





