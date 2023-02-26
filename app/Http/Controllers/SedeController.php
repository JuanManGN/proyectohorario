<?php

namespace App\Http\Controllers;

use App\Models\Sede;
use Illuminate\Http\Request;

class SedeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sede=Sede::orderby('nombre', 'asc')->get();
        return view('sedes.sedes', ['mostrar'=>$sede]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Sede $sede){
        return view('sedes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){

        $nuevo = new Sede();
        $nuevo->nombre=$request->nombre;
        $nuevo->direccion=$request->direccion;
        $nuevo->save();
        /*$request->validate([
            'nombre'=>'required',
            'direccion'=>'required',
        ]);
        $campu = $request->user()->campu()->create([

            'nombre'=>$request->nombre,
            'direccion' =>$request->direccion,
        ]);
        return redirect()->route('sedes.sedes', $campu);*/
    }

    /**
     * Display the specified resource.
     */

    /**
     * Update the specified resource in storage.
     */
    public function edit(Sede $sede){
        return view('sedes.edit', ['sede'=>$sede]);
    }

    public function update(Request $request, Sede $sede){
        
        $request->validate([
            'nombre'=>'required|unique:campu,nombre,'.$sede->id,
            'direccion'=>'required',
        ]);

        $sede -> update([
            'nombre'=>$request->nombre,
            'direccion' =>$request->direccion,
        ]);
        return redirect()->route('sedes.edit', $sede);
    }

    public function destroy(Sede $sede){
        $sede->delete();
        return back();
    }
}
