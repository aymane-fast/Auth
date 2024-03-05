<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use function Laravel\Prompts\password;

class UsersController extends Controller
{
    public function Register(Request $request){
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        return redirect('/login');
    }
    public function Login(Request $request){
        $credentials = $request->only('email','password');

        if(Auth::attempt($credentials)){
            return redirect()->intended('/dashboard');
        }
        dd($credentials);
        return redirect('/register')->withErrors('something went wrong , please register first ');
    }
    public function Dashboard(){
        return view('dashboard');
    } 
}