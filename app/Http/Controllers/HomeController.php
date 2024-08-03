<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $Moviejson = file_get_contents(public_path('assets/top-4.json'));
        $top_4 = json_decode($Moviejson, true);
        $trend = file_get_contents(public_path('assets/trending-movies.json'));
        $trending = json_decode($trend, true);
        $latestjson = file_get_contents(public_path('assets/latest-movies.json'));
        $latest = json_decode($latestjson, true);
        return view('pages.home',compact('top_4', 'trending', 'latest'));
    }
}
