<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Models\Fillier;
use App\Models\Grade;

use function Laravel\Prompts\password;

class UsersController extends Controller
{
    //register view 
    public function RegisterView()
    {
        $filliers = Fillier::all();
        return view('register', ['filliers' => $filliers]);
    }
    public function Register(Request $request)
    {
        //storing users in the database 
        //role attribute default is user {change it into admin}
        $data = $request->all();
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'cin' => $request->cin,
            'fillier_id' => $request->fillier_id,
            'password' => Hash::make($request->password),
        ]);
        return redirect('/login');
    }
    public function Login(Request $request)
    {


        $credentials = $request->only('email', 'password');
        // using auth to login using the credentials
        if (Auth::attempt($credentials)) {
            if (Auth::user()->role == 'admin') {
                return redirect('/listUsers');
            } elseif (Auth::user()->role == 'user') {
                return redirect('/dashboard');
            }
        }
        return redirect()->back()->withErrors('user not found');
    }
    //logout method
    public function delete($id)
    {
        User::destroy($id);
        return redirect('/listUsers');
    }
    public function Accept($id)
    {
        $user = User::find($id);
        $user->accepted = 'accepted';
        $user->save();
        return redirect()->back();
    }

    public function Refuse($id)
    {
        $user = User::find($id);
        $user->accepted = 'refuse';
        $user->save();
        return redirect()->back();
    }
    public function Attent($id)
    {
        $user = User::find($id);
        $user->accepted = 'attent';
        $user->save();
        return redirect()->back();
    }

    //views returning methods
    public function listUsers()
    {
        $users = User::all();
        return view('ListUsers')->with('users',  $users);
    }

    public function Dashboard()
    {
        //getting grades
        $grades = Auth::user()->grades;
        return view('dashboard', compact('grades'));
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login'); // Redirect to login page after logout
    }
}
