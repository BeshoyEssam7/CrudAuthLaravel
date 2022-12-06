<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function registerForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {

        $data = $request->validate([
            "name" => "required|string|max:255",
            "email" => "required|email|unique:users,email",
            "password" => "required|string|min:6|confirmed"
        ]);

        $data['password'] = bcrypt($data['password']);
        $user = User::create($data);
        Auth::login($user);
        return redirect(url('categories'));
    }

    public function loginForm()
    {
        return view('auth.login');
    }


    public function login(Request $request)
    {

        $data = $request->validate([
            "email" => 'required|email',
            "password" => 'required|min:6|string',
        ]);

        $verified = Auth::attempt(["email" => $data['email'], "password" => $data['password']]);
        if (!$verified) {
            return redirect(url('login'))->withErrors("credintials not correct");
        } else {
            return redirect(url('categories'));
        }
    }

    public function logout(){
        Auth::logout();
        return redirect(url('login'));
    }

}
