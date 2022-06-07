<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\restaurant;

class Restaurant_controller extends Controller
{
    public function getAllRestaurants($id=null){
        if($id !=null){
            $restos=restaurant::find($id);
        }
        else{
            $restos=restaurant::all();
        }
        return response()->json([
            "status" => "Success",
            "restos" => $restos
        ], 200);


    }
    public function addResto(Request $request){
        $resto = new Restaurant;
        $resto->R_Name = $request->R_Name;
        $resto->Description = $request->Description;
        $resto->save();
        
        return response()->json([
            "status" => "Success"
        ], 200);
    }


}
