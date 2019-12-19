<?php

namespace App\Http\Controllers;

use App\Sector;
use Illuminate\Http\Request;

class SectorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sectores = Sector::all();
        return view('sector.index', compact('sectores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     ** @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sector.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sectorNuevo = Sector::create($request->all());
        $sectorNuevo->save(); // es realmente necesario? quizas basta con create :think:
        return redirect()->route('sector.show', $sectorNuevo->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  Integer  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sector = Sector::findOrFail($id);
        return view('sector.show', compact('sector'));
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
        $sector = Sector::findOrFail($id);

        // 2 pasar la instancia a la vista
        return view('sector.edit', compact('sector'));
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
        $sector = Sector::findOrFail($id);

        // 2 modificar los datos existentes
        $sector->update($request->all());

        // redireccionar a la vista de detalles de la tupla
        return redirect()->route('sector.show',$sector->id);
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
