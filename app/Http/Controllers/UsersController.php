<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

use function Laravel\Prompts\password;

class UsersController extends Controller
{
    public function Register(Request $request){
        //storing users in the database 
        //role attribute default is user {change it into admin}
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        return redirect('/login');
    }

    public function Login(Request $request){

        $credentials = $request->only('email','password');
        //using auth to login using the credentials
        if(Auth::attempt($credentials)){
            return redirect('/dashboard');
        }
        return redirect()->back()->withErrors('user not found');
    }
    public function delete($id){
        User::destroy($id);
        return redirect('/listUsers');
    }

    //views returning methods
    public function listUsers(){
        $users = User::all();
        return view('ListUsers')->with('users',  $users);
    }
    public function Dashboard(){
        return view('dashboard');
    } 
}