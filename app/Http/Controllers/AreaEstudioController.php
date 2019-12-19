<?php

namespace App\Http\Controllers;

use App\AreaEstudio;
use Illuminate\Http\Request;

class AreaEstudioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $areas = AreaEstudio::all();
        return view('area-estudio.index', compact('areas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     ** @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('area-estudio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $areaNueva = AreaEstudio::create($request->all());
        $areaNueva->save(); // es realmente necesario? quizas basta con create :think:
        return redirect()->route('area-estudio.show', $areaNueva->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  Integer  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $area = AreaEstudio::findOrFail($id);
        return view('area-estudio.show', compact('area'));
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
        $area = AreaEstudio::findOrFail($id);

        // 2 pasar la instancia a la vista
        return view('area-estudio.edit', compact('area'));
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
        $area = AreaEstudio::findOrFail($id);

        // 2 modificar los datos existentes
        $area->update($request->all());

        // redireccionar a la vista de detalles de la tupla
        return redirect()->route('area-estudio.show',$area->id);
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
