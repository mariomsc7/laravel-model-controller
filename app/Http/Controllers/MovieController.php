<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    // ARCHIVIO FILM

    public function index() {
        return view('movies');
    }
}
