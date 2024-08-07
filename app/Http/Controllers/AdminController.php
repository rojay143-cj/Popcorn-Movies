<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function admin_dashboard(){
        $production = DB::table('production')->get();
        return view('pages.admin.dashboard', compact('production'));
    }
    function AddTeam(Request $request){
        $request->validate([
            'name' => 'required|min:4',
            'position' => 'required|min:4',
        ]);
        $data = [
            'name' => $request->name,
            'position' => $request->position
        ];
        $production = DB::table('production')->insert($data);
        if($production){
            return redirect('/Pop Admin Panel')->with('success', 'Team added successfully');
        }else{
            return redirect('/Pop Admin Panel')->with('error', 'Failed to add to the team');
        }
    }
}
