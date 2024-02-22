<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonalDataController;

Route::controller(PersonalDataController::class)->group(function () {
    Route::get('welcome', 'welcomefun')->name('welcome_page');
    Route::post('welcome', 'submit_personal_data')->name('submit_personal_data');


    Route::get('user-view', 'user_view_fun')->name('user_view_page');
// for login
    Route::get('login', 'login_get_fun')->name('login_get_page');
    Route::post('login', 'login_post_fun')->name('login_post_page');

});

Route::get('/', function () { return view('welcome'); });