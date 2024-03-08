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
        $data = $request->all();    
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'cin'=> $request->cin,
            'password' => Hash::make($request->password),
        ]);
        return redirect('/login');
    }

    public function Login(Request $request){

        $credentials = $request->only('email','password');
        //using auth to login using the credentials
        if(Auth::attempt($credentials)){
            return redirect('/dashboard');
            if (Auth::user()->role === 'admin'){
                return redirect('/listUsers');
            }
        
        }
        return redirect()->back()->withErrors('user not found');
    }


    public function delete($id){
        User::destroy($id);
        return redirect('/listUsers');
    }
    public function Accept($id){
        $user = User::find($id);
        $user->accepted = 'accepted';
        $user->save();
        return redirect()->back();
    }
    
    public function Refuse($id){
        $user = User::find($id);
        $user->accepted = 'refuse';
        $user->save();
        return redirect()->back();
    }
    public function Attent($id){
        $user = User::find($id);
        $user->accepted = 'attent';
        $user->save();
        return redirect()->back();
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