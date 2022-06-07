<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;


class user_controller extends Controller
{
    public function login(Request $request){
        die($request);
        $user=[];
        $user["Email"]=$request->Email;
        $user["Password"]=$request->Password;
        $user_data=user::where("Email","=","$user[Email]")->post();
        
        return reaponse()->json([
            "status"=>"Success",
            "results"=>$user

        ]);
    }
    public function signUp(Request $request){
        die($request);
        $user = [];
        $user["first_name"] = $request->F_Name;
        $user["last_name"] = $request->L_Name;
        $user["Email"] = $request->Email;
        $user["Password"] = $request->Password;
        save();


        return response()->json([
            "status" => "Success",
            "users" => $user
        ], 200);
    }
}
