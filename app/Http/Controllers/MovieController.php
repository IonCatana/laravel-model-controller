<?php

namespace App\Http\Controllers;

use App\Movie;

class MovieController extends Controller
{
    //
    public function index()
    {
        return view('home');
    }
    public function movie()
    {
        
        $movies = Movie::all();

        return view('movies', compact('movies'));
    }
}
