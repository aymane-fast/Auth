<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use App\Models\User;
use App\Models\Module;
use Illuminate\Http\Request;
use App\Models\Fillier;

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

        return view('AddGrade', compact('students', 'modules'));
    }
    public function gradesSelect()
    {
        $filliers = Fillier::all();
        return view('SelectFillier', compact('filliers'));
    }

    public function gradesSelectAction(Request $request)
    {
        $fillier = Fillier::findOrFail($request->query('fillier_id'));
        $students = $fillier->students;
        $modules = Module::all();

        return view('grades.create', compact('students', 'modules'));
    }
}
