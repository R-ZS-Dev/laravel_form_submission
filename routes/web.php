<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonalDataController;

Route::controller(PersonalDataController::class)->group(function () {
    Route::get('welcome', 'welcomefun')->name('welcome_page');
    Route::post('welcome', 'submit_personal_data')->name('submit_personal_data');
});

Route::get('/', function () { return view('welcome'); });