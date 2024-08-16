<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categoria;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $categoria = categorias::all();
        return categoria; 
        return view('juego.categoria');
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('juego.categoria');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nombre'=>'required|string|max:255'
        ]);

        $categoria = new Categoria();
        $categoria->nombre= $request->nombre;

        $categoria->save();

        return  redirect()->back()->with('success', '¡Categoria creada con exito!');
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
