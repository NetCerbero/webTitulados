<?php

namespace App\Http\Controllers;

use App\AreaCargo;
use Illuminate\Http\Request;

class AreaCargoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $areas = AreaCargo::all();
        return view('area-cargo.index', compact('areas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     ** @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('area-cargo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $areaNueva = AreaCargo::create($request->all());
        $areaNueva->save(); // es realmente necesario? quizas basta con create :think:
        return redirect()->route('area-cargo.show', $areaNueva->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  Integer  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $area = AreaCargo::findOrFail($id);
        return view('area-cargo.show', compact('area'));
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
        $area = AreaCargo::findOrFail($id);

        // 2 pasar la instancia a la vista
        return view('area-cargo.edit', compact('area'));
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
        $area = AreaCargo::findOrFail($id);

        // 2 modificar los datos existentes
        $area->update($request->all());

        // redireccionar a la vista de detalles de la tupla
        return redirect()->route('area-cargo.show',$area->id);
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
