<?php

namespace App\Http\Controllers;
use App\Models\Fillier;
use Illuminate\Http\Request;

class FillierController extends Controller
{
   
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
        ]);
        Fillier::create($data);

        return redirect()->route('fillier.index');
    }
    //showing a list of the  filliers
    public function index()
    {
        $filliers = Fillier::all();
        return view('filliers.Filliers', compact('filliers'));
    }
    public function showModules(Request $request)
    {
        $fillier = Fillier::find($request->id);
        $modules = $fillier->modules;
        return view('filliers.FillierModules', compact('modules', 'fillier'));
    }
   

}