<?php

namespace App\Http\Controllers;

use App\Models\Fillier;
use App\Models\Grade;
use App\Models\User;
use App\Models\Module;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'grades' => 'required|array',
            'grades.*' => 'required|numeric|min:0|max:20',
            'module_id' => 'required|exists:modules,id',
            'controlle' => 'required',
        ]);
        // dd($request);

        // Get the module ID
        $moduleId = $request->module_id;

        // Get the grades
        $grades = $request->grades;

        $controlle = $request->controlle;

        // Loop through the grades and store each one in the database
        foreach ($grades as $studentId => $grade) {
            Grade::create([
                'user_id' => $studentId,
                'module_id' => $moduleId,
                'value' => $grade,
                'controlle'=> $controlle

            ]);
        }

        return back()->with('success', 'Grades added successfully');
    }

    public function selectFillierView()
    {
        $filliers = Fillier::all();

        return view('grades.AddGrade', compact('filliers'));
    }
    public function selectFillier(Request $request)
    {
        $fillier = Fillier::findOrFail($request->fillier_id);
        $students = $fillier->students;
        $modules = $fillier->modules;

        return view('grades.add', compact('students', 'modules'));
    }
    public function showGrades()
    {
        $user = auth()->user();
        $grades = Grade::where('user_id', $user->id)->get();
        return view('grades.ShowGrades', compact('grades'));
    }
}
