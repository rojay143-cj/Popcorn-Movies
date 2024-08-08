<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductionController extends Controller
{
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

    function EditTeam(Request $request,$teamid){
        $validate = $request->validate([
            'name' => 'nullable|min:4',
            'position' => 'nullable|min:4',
        ]);
        $data = [];
        switch ($validate) {
            case $request->filled('name'):
                $data['name'] = $validate['name'];
                break;
            case $request->filled('position'):
                $data['position'] = $validate['position'];
                break;
        }
        if(empty($data)){
            return redirect(route('Admin_Dashboard'))->with('nuetral-error', 'No changes made');
        }else{
            $editteam = DB::table('production')->where('prod_id', $teamid)->update($data);
            if($editteam){
                return redirect(route('Admin_Dashboard'))->with('success', 'Team updated successfully');
            } else {
                return redirect(route('Admin_Dashboard'))->with('error', 'Failed to update team');
            }
        }
    }
    function DeleteTeam(Request $request){
        $data = [
            'prod_id' => $request->prod_id
        ];
        $deleteteam = DB::table('production')->where('prod_id', $data)->delete();
        if($deleteteam){
            return redirect(route('Admin_Dashboard'))->with('success', 'Team deleted successfully');
        } else {
            return redirect(route('Admin_Dashboard'))->with('error', 'Failed to delete team');
        }
    }
}
