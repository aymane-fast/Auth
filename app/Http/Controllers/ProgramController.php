<?php

namespace App\Http\Controllers;

use App\Models\Fillier;
use App\Models\Module;
use App\Models\Program;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function index()
    {     
            $filliers = Fillier::all();
            return view('programs.index', compact('filliers'));
        
    }

    public function create()
    {
        $filliers = Fillier::all();
        $modules = Module::all();
        return view('programs.create', compact('filliers', 'modules'));


    }

    public function store(Request $request)
    {
        $program = Program::create($request->all());
        return redirect()->route('programs.index');
    }

    public function show(Program $program)
    {
        return view('programs.show', compact('program'));
    }

    public function edit(Program $program)
    {
        $filliers = Fillier::all();
        $modules = Module::all();
        return view('programs.edit', compact('filliers','modules','program'));
    }

    public function update(Request $request, Program $program)
    {
        $program->update($request->all());
        return redirect()->route('programs.index');
    }
    
    public function destroy(Program $program)
    {
        $program->delete();
        return redirect()->route('programs.index');
    }
    // index create show edit 
}
