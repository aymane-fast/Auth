<?php
namespace App\Http\Controllers;

use App\Models\Grade;
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
}