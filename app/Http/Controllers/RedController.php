<?php

namespace App\Http\Controllers;

use App\Models\Red;
use Illuminate\Http\Request;

class RedController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $red=Red::orderby('nombre','asc')->get();
        return view('redes.redes',['mostrar'=>$red]);
    }
    public function create(Red $red)
    {
        return view('redes.create');
    }

    public function store(Request $request)
    {
        $nuevo=new Red();
        $nuevo->codigo_red = $request->codigo_red;
        $nuevo->nombre = $request->nombre;
        $nuevo->save();

        /*$request->validate([
            'nombre'=>'required',
        ]);
        $campu = $request->user()->campu()->create([

            'nombre'=>$request->nombre,
        ]);
        return redirect()->route('red.red', $campu);*/
    }

    public function edit(Red $red){
        return view('redes.edit', ['red'=>$red]);
    }

    public function update(Request $request, Red $red){
        
        $request->validate([
            'nombre'=>'required|unique:red,nombre,'.$red->id,
        ]);

        $red -> update([
            'nombre'=>$request->nombre,
        ]);
        return redirect()->route('red.edit', $red);
    }

    public function destroy(Red $red){
        $red->delete();
        return back();
    }
}
