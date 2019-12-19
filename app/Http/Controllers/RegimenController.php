<?php

namespace App\Http\Controllers;

use App\Regimen;
use Illuminate\Http\Request;

class RegimenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $regimenes = Regimen::all();
        return view('regimen.index', compact('regimenes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     ** @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('regimen.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $regimenNuevo = Regimen::create($request->all());
        $regimenNuevo->save(); // es realmente necesario? quizas basta con create :think:
        return redirect()->route('regimen.show', $regimenNuevo->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  Integer  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $regimen = Regimen::findOrFail($id);
        return view('regimen.show', compact('regimen'));
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
        $regimen = Regimen::findOrFail($id);

        // 2 pasar la instancia a la vista
        return view('regimen.edit', compact('regimen'));
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
        $regimen = Regimen::findOrFail($id);

        // 2 modificar los datos existentes
        $regimen->update($request->all());

        // redireccionar a la vista de detalles de la tupla
        return redirect()->route('regimen.show',$regimen->id);
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
