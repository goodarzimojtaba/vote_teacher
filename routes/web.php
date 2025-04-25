<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\survey_controller;

Route::get('/',[survey_controller::class,'start_app'])->name('login1');
Route::POST('/',[survey_controller::class,'validation'])->name('login');
Route::get('/surveys', [survey_Controller::class, 'index'])->name('surveys.index');
Route::post('/surveys', [Survey_Controller::class, 'store'])->name('surveys.store');
Route::get('/message',[survey_controller::class,'message'])->name('msg');
Route::get('/valid_request',[survey_controller::class,'valid'])->name('valid');
Route::get('/Teacher_panel',[survey_controller::class,'panel'])->name('panel');
Route::get('/notice',[survey_controller::class,'home'])->name('home');
Route::get('/x',[survey_controller::class,'exit'])->name('exit');