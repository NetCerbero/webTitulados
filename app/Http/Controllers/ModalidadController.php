<?php

namespace App\Http\Controllers;

use App\Modalidad;
use Illuminate\Http\Request;
use App\User;

class ModalidadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Modalidad::all();
        return view('modalidad.index',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Modalidad::create($request->all());
        return redirect()->route('modalidad.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Modalidad  $modalidad
     * @return \Illuminate\Http\Response
     */
    public function show(Modalidad $modalidad)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Modalidad  $modalidad
     * @return \Illuminate\Http\Response
     */
    public function edit(Modalidad $modalidad)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Modalidad  $modalidad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Modalidad $modalidad)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Modalidad  $modalidad
     * @return \Illuminate\Http\Response
     */
    public function destroy(Modalidad $modalidad)
    {
        //
    }

    public function trabajo(){
        $docentes = User::all()->where('tipo',2);
        $estudiantes = User::all()->whereIn('tipo',[1,3]);
        $areas = [];
        return view('modalidad.tesis_create',compact('docentes','areas','estudiantes'));
    }

    public function examen(){
        $areas = [];
        $estudiantes = User::all()->whereIn('tipo',[1,3]);
        return view('modalidad.e_grado_create',compact('areas','estudiantes'));
    }

    public function directo(){
        $estudiantes = User::all()->whereIn('tipo',[1,3]);
        return view('modalidad.directa',compact('estudiantes'));
    }

    public function externo(){
        $estudiantes = User::all()->whereIn('tipo',[1,3]);
        return view('modalidad.externo',compact('estudiantes'));
    }
}
