<?php

namespace App\Http\Controllers;

use App\Models\Programa;
use Illuminate\Http\Request;

class ProgramaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function programa(){
        return view('programas.programas', ['programas'=> Programa::latest()->paginate()
    ]);
    }

    public function create(Programa $programa){
        return view('programas.create', ['programas'=>$programa]);
    }

    public function store(Request $request){

        $request->validate([
            'codigo_programa'=>'required | unique:programas, codigo_programa',
            'nombre'=>'required',
            'version_programa'=>'required',
            'nivel_formacion'=>'required',
            'codigo_area'=>'required',
            'codigo_area'=>'required'

        ]);
        
        $programa = $request->user()->posts()->create([
            'codigo_programa'=>$request->codigo_programa,
            'nombre' =>$request->nombre,
            'version_programa' =>$request->version_programa,
            'nivel_formacion' =>$request->nivel_formacion,
            'codigo_area' =>$request->codigo_area,
            'codigo_area' =>$request->codigo_area,
        ]);
        return redirect()->route('programa.edit', $programa);
    }

    public function edit(Programa $programa){
        return view('programas.edit', ['programas'=>$programa]);
    }

    public function update(Request $request, Programa $programa){
        
        $request->validate([
            'codigo_programa'=>'required | unique:programas, codigo_programa',
            'nombre'=>'required',
            'version_programa'=>'required',
            'nivel_formacion'=>'required',
            'codigo_area'=>'required'
            
        ]);

        $programa -> update([
            'codigo_programa'=>$request->codigo_programa,
            'nombre' =>$request->nombre,
            'version_programa' =>$request->version_programa,
            'nivel_formacion' =>$request->nivel_formacion,
            'codigo_area' =>$request->codigo_area,
            'codigo_area' =>$request->codigo_area,
        ]);
        return redirect()->route('programas.edit', $programa);
    }

    public function destroy(Programa $programa){
        $programa->delete();
        return back();
    }
}
