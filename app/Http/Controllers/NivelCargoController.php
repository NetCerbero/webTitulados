<?php

namespace App\Http\Controllers;

use App\NivelCargo;
use Illuminate\Http\Request;

class NivelCargoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $niveles = NivelCargo::all();
        return view('nivel-cargo.index', compact('niveles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     ** @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('nivel-cargo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nivelNuevo = NivelCargo::create($request->all());
        $nivelNuevo->save(); // es realmente necesario? quizas basta con create :think:
        return redirect()->route('nivel-cargo.show', $nivelNuevo->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  Integer  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $nivel = NivelCargo::findOrFail($id);
        return view('nivel-cargo.show', compact('nivel'));
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
        $nivel = NivelCargo::findOrFail($id);

        // 2 pasar la instancia a la vista
        return view('nivel-cargo.edit', compact('nivel'));
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
        $nivel = NivelCargo::findOrFail($id);

        // 2 modificar los datos existentes
        $nivel->update($request->all());

        // redireccionar a la vista de detalles de la tupla
        return redirect()->route('nivel-cargo.show',$nivel->id);
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
