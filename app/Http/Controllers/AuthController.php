<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function index(Request $request)
    {
        
        if(Auth::check()){
            return redirect()->route('home');
        }
        return view('login');
    }

    public function login_action(Request $request)
    {
       $validator =  $request->validate([
        'email'=>'required|email',
        'password'=>'required|min:6'
       ]);
       if(Auth::Attempt($validator)){
            return redirect()->route('home');
       }
    }

    public function register(Request $request)
    {
        $isLoggedIn = Auth::User();
        if($isLoggedIn){
            return redirect()->route('home');
        }
        return view('register');
    }

    public function register_action(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:6|confirmed'
        ]);
        $data = $request->only('name', 'email','password');

        $userCreated = User::create($data);

        return redirect(route('login'));
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
