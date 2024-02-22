<?php

namespace App\Http\Controllers;
use App\Models\personal_data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PersonalDataController extends Controller
{
    public function submit_personal_data(Request $request) {
        personal_data::create($request->except('_token'));
        return redirect()->route('welcome_page');
    }

    public function welcomefun(){
        return view('welcome');
    }

    public function user_view_fun(){
        return view('user-view');
    }

    // for login
    public function login_get_fun() {
        return view('login');
    }
    

    public function login_post_fun(Request $request) {
        $login_user=personal_data::where('email', $request->email)->where('password', $request->password)->first();
        if ($login_user) {
            Session::put('login_new_session', $login_user->id);
            return redirect()->route('user_view_page');
        } else {
            return redirect()->route('login_get_page')->withErrors(['message' => 'Incorrect password']);
        }
    }  
    
}