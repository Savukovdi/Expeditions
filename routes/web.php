<?php

use App\Http\Controllers\StatusController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ExpeditionController;
use App\Http\Controllers\RecordingController;
use App\Http\Controllers\LeaderController;
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

Route::get('/',[SiteController::class, 'index'])->name('index');

Route::get('/expedition',[ExpeditionController::class, 'expedition'])->name('expedition');
Route::post('/expedition_filtr',[ExpeditionController::class, 'expedition_filtr'])->name('expedition_filtr');

Route::get('/about_us',[SiteController::class, 'about_us'])->name('about_us');

Route::get('/login',[SiteController::class,'login'])->name('login');
Route::post('/login',[UserController::class,'login'])-> name('login');

Route::get('/register',[SiteController::class, 'register'])->name('register');
Route::post('/register', [UserController::class, 'register'])->name('register');

Route::middleware(['auth','isadmin'])->group(function () {
    Route::get('/admin',[UserController::class,'admin'])->name('admin');

    Route::get('/expedition_create',[ExpeditionController::class,'expedition_create_form'])->name('expedition_create_form');
    Route::post('/expedition_create',[ExpeditionController::class,'expedition_create'])-> name('expedition_create');

    Route::get('/expedition_update_form/{id}',[ExpeditionController::class,'expedition_update_form'])->name('expedition_update_form');
    Route::post('/expedition_update/{id}',[ExpeditionController::class,'expedition_update'])->name('expedition_update');

    Route::get('/expedition_delete/{id}',[ExpeditionController::class,'expedition_delete'])->name('expedition_delete');

    Route::get('/status',[StatusController::class,'status'])->name('status');
    Route::post('/update_status',[StatusController::class,'update_status_confirm'])->name('update_status_confirm');
    Route::post('/update_status/{id}',[StatusController::class,'update_status_reject'])->name('update_status_reject');

    Route::get('/leader',[LeaderController::class,'leader'])->name('leader');
    Route::post('/leader_create',[LeaderController::class,'leader_create'])-> name('leader_create');

    Route::get('/leader_delete/{id}',[LeaderController::class,'leader_delete'])-> name('leader_delete');

    Route::get('/recording',[RecordingController::class,'recording'])->name('recording');

    Route::get('/recording_delete/{id}',[RecordingController::class,'recording_delete'])->name('recording_delete');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/profile',[UserController::class,'profile'])->name('profile');

    Route::get('/user_update/{id}',[SiteController::class,'user_update'])->name('user_update');
    Route::post('/user_update/{id}',[UserController::class,'user_update'])->name('user_update');

    Route::get('/expedition_page/{id}',[ExpeditionController::class,'expedition_page_form'])->name('expedition_page_form');
    Route::get('/expedition_book/{id}',[ExpeditionController::class,'expedition_book_form'])->name('expedition_book_form');
    Route::post('/expedition_book',[ExpeditionController::class,'expedition_book'])->name('expedition_book');

    Route::get('/status_delete/{id}',[StatusController::class,'status_delete'])->name('status_delete');

    Route::get('/info/{id}',[RecordingController::class, 'info'])->name('info');

    Route::get('/logout',[UserController::class,'logout'])->name('logout');
});

Route::get('/privacy_policy',[SiteController::class, 'privacy_policy'])->name('privacy_policy');