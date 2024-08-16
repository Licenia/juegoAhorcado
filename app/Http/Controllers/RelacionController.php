<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\palabra;

class RelacionController extends Controller
{
    //
    public function index(){
        $palabra = palabra::all();
        return view('juego.palabra', compact('palabra'));
    }
}
