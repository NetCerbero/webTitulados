<?php

namespace App\Http\Controllers;

use App\GradoAcademico;
use Illuminate\Http\Request;

class GradoAcademicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $grados = GradoAcademico::all();
        return view('grado-academico.index', compact('grados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     ** @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('grado-academico.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $gradoNuevo = GradoAcademico::create($request->all());
        $gradoNuevo->save();
        return redirect()->route(
            'grado-academico.show',
            ['id' => $gradoNuevo->id]
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  Integer  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $grado = GradoAcademico::findOrFail($id);
        return view('grado-academico.show', compact('grado'));
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
        $grado = GradoAcademico::findOrFail($id);

        // 2 pasar la instancia a la vista
        return view('grado-academico.edit', compact('grado'));
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
        $grado = GradoAcademico::findOrFail($id);

        // 2 modificar los datos existentes
        $grado->update($request->all());

        // redireccionar a la vista de detalles de la tupla
        return redirect()->route('grado-academico.show',$grado->id);
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
