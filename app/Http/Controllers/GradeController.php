<?php
namespace App\Http\Controllers;

use App\Models\Grade;
use App\Models\User;
use App\Models\Module;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'user_id' => 'required',
            'module_id' => 'required',
            'value' => 'required',
        ]);

        Grade::create($data);

        return back()->with('success', 'Grade added successfully');
    }
    public function storeView()
    {

        $students = User::where('role', 'user')->get();
        $modules = Module::all();

        return view('grades.AddGrade', compact( 'students', 'modules'));
    }
    public function showGrades()
    {
        $user = auth()->user();
        $grades = Grade::where('user_id', $user->id)->get();
        return view('grades.ShowGrades', compact('grades'));
    }
}