<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    // ARCHIVIO FILM

    public function index() {

        // get movies from database
        $movies = Movie::all();
        

        // return user view
        return view('movies', compact('movies'));
    }
}
