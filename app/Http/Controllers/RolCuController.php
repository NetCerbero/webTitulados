<?php

namespace App\Http\Controllers;

use App\RolCu;
use App\Rol;
use App\Cu;
use Illuminate\Http\Request;

class RolCuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Rol::all();
        return view('adm.index',compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Rol::all();
        $cus = Cu::all();
        return view('adm.create',compact('roles','cus'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rol = Rol::find($request['rol']);
        
        foreach($request['data'] as $key => $value ){
            $rol->caso_usos()->syncWithoutDetaching(
                [
                    $key => $value
                ]
            );
        }

        return redirect()->route('adm.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\RolCu  $rolCu
     * @return \Illuminate\Http\Response
     */
    public function show(RolCu $rolCu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\RolCu  $rolCu
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rol = Rol::findOrFail($id);
        $cus = $rol->caso_usos;
        return view('adm.edit',compact('rol','cus'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\RolCu  $rolCu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rol = Rol::find($id);
        
        foreach($request['data'] as $key => $value ){
            $rol->caso_usos()->syncWithoutDetaching(
                [
                    $key => $value
                ]
            );
        }
        return redirect()->route('adm.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\RolCu  $rolCu
     * @return \Illuminate\Http\Response
     */
    public function destroy(RolCu $rolCu)
    {
        //
    }
}
