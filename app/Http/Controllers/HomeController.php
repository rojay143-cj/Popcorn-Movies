<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $Moviejson = file_get_contents(public_path('assets/movie.json'));
        $movies = json_decode($Moviejson, true);
        return view('pages.home')->with(['movies'=> $movies]);
    }
}
