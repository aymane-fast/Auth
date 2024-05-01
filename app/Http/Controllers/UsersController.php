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
        return view('users.register', ['filliers' => $filliers]);
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
            return redirect('/dashboard');
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
        // Check if the user is an admin
        if (Auth::user()->role === 'admin') {
            return view('adminDashboard');
        }

        // If the user is not an admin, they are a normal user
        // Get the user's status
        $status = Auth::user()->accepted;
        $message = '';

        switch ($status) {
            case 'refuse':
                $message = "votre dossier et refuser , contacter l'administration";
                break;
            case 'attent':
                $message = "votre dossier et cours de traitement";
                break;
            case 'accepted':
                $message = "you are accepted";
                break;
        }
        // Get the user's grades
        $grades = Auth::user()->grades;

        // Redirect to the normal user dashboard
        return view('dashboard', compact('grades', 'message'));
    }
    

    public function logout()
    {
        Auth::logout();
        return redirect('/login'); // Redirect to login page after logout
    }
}
