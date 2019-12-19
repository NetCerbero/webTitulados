<?php

namespace App\Http\Controllers;

use App\SituacionEmpleo;
use Illuminate\Http\Request;

class SituacionEmpleoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $situaciones = SituacionEmpleo::all();
        return view('situacion-empleo.index', compact('situaciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     ** @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('situacion-empleo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $situacionNueva = SituacionEmpleo::create($request->all());
        $situacionNueva->save(); // es realmente necesario? quizas basta con create :think:
        return redirect()->route('situacion-empleo.show', $situacionNueva->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  Integer  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $situacion = SituacionEmpleo::findOrFail($id);
        return view('situacion-empleo.show', compact('situacion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Integer $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // 1 obtener la instancia existente
        $situacion = SituacionEmpleo::findOrFail($id);

        // 2 pasar la instancia a la vista
        return view('situacion-empleo.edit', compact('situacion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Integer $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // 1 obtener la tupla existente
        $situacion = SituacionEmpleo::findOrFail($id);

        // 2 modificar los datos existentes
        $situacion->update($request->all());

        // redireccionar a la vista de detalles de la tupla
        return redirect()->route('situacion-empleo.show',$situacion->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Integer  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return 'Tried to delete: ' . $id.'. I cant let you do that...';
    }
}
