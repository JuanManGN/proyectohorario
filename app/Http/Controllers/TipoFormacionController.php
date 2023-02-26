<?php

namespace App\Http\Controllers;

use App\Models\TipoFormacion;
use Illuminate\Http\Request;

class TipoFormacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return view('welcome');
        $tipoFormacion=TipoFormacion::orderby('codigo_tipo_form','asc')->get();
        return view('tipoformacion.tipo',['mostrar'=>$tipoFormacion]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tipoformacion.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nuevo = new TipoFormacion();
        $nuevo->codigo_tipo_form=$request->codigo_tipo_form;
        $nuevo->nombre=$request->nombre;
        $nuevo->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(TipoFormacion $tipoFormacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TipoFormacion $tipoFormacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TipoFormacion $tipoFormacion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TipoFormacion $tipoFormacion)
    {
        //
    }
}
