<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    public function index(){
        return view('login', [
            'title' => 'login'
        ]);
    }

    public function validasi(Request $request) {
        $validateData = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);
        if(Auth::attempt($validateData)) {
            $request->session()->regenerate();
            return redirect()->intended('/home');
        }
        return back()->with('login Error', 'login failed!');
    }

    public function logingoogle(){
        return Socialite::driver('google')->redirect();
    }

    public function regislogin($data){
        $user = User::where('email','=',$data->email)->first();
        if(!$user){
            $user = new User();
            $user->name = $data->name;
            $user->email = $data->email;
            $user->provider_id = $data->provider_id;
            $user->save();
        }
        Auth::login($user);
    }

    public function callbackgoogle(){
        $user = Socialite::driver('google')->user();
        $this->regislogin($user);
        return redirect('/home');
    }

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}

