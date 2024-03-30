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
        $grades = Grade::all();

        $students = User::where('role', 'user')->get();
        $modules = Module::all();
        // dd($grades, $students, $modules);

        return view('AddGrade', compact('grades', 'students', 'modules'));
    }
}