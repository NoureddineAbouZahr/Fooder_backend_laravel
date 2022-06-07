<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;


class user_controller extends Controller
{
    public function login(Request $request){
        die($request);
        $user=new users;
        $user->Email=$request->Email;
        $user->Password=Hash::make($request->Password);
        $user_data=users::where("Email","=",$Email)
        ::where("Password","=",$Password);
        
        return reaponse()->json([
            "status"=>"Success",
            "results"=>$user

        ]);
    }
    public function signUp(Request $request){
        die($request);
        $user = new users;
        $user->F_Name = $request->F_Name;
        $user->L_Name= $request->L_Name;
        $user->Email = $request->Email;
        $user->Password =Hash::make($request->Password);
        save();


        return response()->json([
            "status" => "Success",
        ], 200);
    }
}
