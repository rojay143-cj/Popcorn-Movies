<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function admin_dashboard(){
        $production = DB::table('production')->get();
        $countries = DB::table('country')->get();
        $genres = DB::table('genre')->get();
        return view('pages.admin.dashboard', compact('production','countries','genres'));
    }
}
