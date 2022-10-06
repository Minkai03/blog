<?php

namespace App\Http\Controllers;
use App\Models\Pelicula;

use Illuminate\Http\Request;

class peliculacontroller extends Controller
{
    public function index(){
        $pelicula = Pelicula::where('nombre')->get();

        return view('pelicula.index', compact('pelicula'));
    }
}
