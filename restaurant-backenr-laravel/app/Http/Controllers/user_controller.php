<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\user;


class user_controller extends Controller
{
    public function login(Request $request){
      ;
        $user=user::where('Email',request('Email'))->first();
        $pass=Hash::check(request('Password'),$user->Password);
       if($pass==true){
        return response()->json([
            "status"=>"logged in",
            "userId"=>$user
            
        ]);}
        else{
            return response()->json([
                "status"=>"invalid"
                
            ]);

        }
    }
    public function signUp(Request $request){
        $user = new user;
        $user->F_Name = $request->F_Name;
        $user->L_Name= $request->L_Name;
        $user->Email = $request->Email;
        $user->Password =Hash::make($request->Password);
        $user->save();


        return response()->json([
            "status" => "Success",
        ], 200);
    }
}
