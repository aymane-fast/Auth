<?php

namespace App\Http\Controllers;

use App\Models\Fillier;
use Illuminate\Support\Facades\Redirect;
use App\Models\Module;
use Illuminate\Http\Request;

class ModuleController extends Controller
{
    public function store(Request $request)
    {
        // dd($request->all());
        $data = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'hours' => 'required',
            'fillier_id' => 'required',
        ]);

        Module::create($data);
        return back()->with('success', 'Module added successfully');
    }
    public function create()
    {
        $filliers = Fillier::all();
        return view('AddModules', compact('filliers'));
    }
}

