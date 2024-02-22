<?php

namespace App\Http\Controllers;
use App\Models\personal_data;
use Illuminate\Http\Request;

class PersonalDataController extends Controller
{
    public function submit_personal_data(Request $request) {
        personal_data::create($request->except('_token'));
        return redirect()->route('welcome_page');
    }

    public function welcomefun(){
        return view('welcome');
    }
}