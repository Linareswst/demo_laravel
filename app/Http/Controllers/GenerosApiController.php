<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Generos;

class GenerosApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $generos=Generos::all();
        return $generos;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $generos=new Generos();
        $generos->nombre_genero=$request->nombre_genero;
        $generos->descripcion=$request->descripcion;
        $generos->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $generos=Generos::find($id);
        return $generos;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $generos=Generos::find($request->id);
        $generos->nombre_genero=$request->nombre_genero;
        $generos->descripcion=$request->descripcion;
        $generos->save();
        return $generos;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $generos=Generos::destroy($id);
        return $generos;
    }
}
