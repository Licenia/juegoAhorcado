<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\palabra;
use App\Models\categoria;

class PalabraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
    }

    /**
     * Show the form for creating a new resource.
     */
    

    public function create()
    {
        //
        $datos = categoria::all();
        return view( 'juego.palabra', compact('datos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
          'palabra' =>'required|string|max:255'
        ]);

        $palabra = new Palabra();
        $palabra->palabra =$request->palabra;

        $palabra->save();
        return  redirect()->back()->with('success', '¡Una nueva palabra fue creada con exito!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
