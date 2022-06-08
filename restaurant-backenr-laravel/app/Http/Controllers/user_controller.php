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
    public function getAllUsers($id=null){
        if($id !=null){
            $users=user::find($id);
        }
        else{
            $users=user::all();
        }
        return response()->json([
            "status" => "Success",
            "users" => $users
        ], 200);


    }
    public function editProfile(Request $request){
        $user=user::where('U_Id',$request->id)->update(['F_Name'=>$request->get('F_Name')]);
        $user=user::where('U_Id',$request->id)->update( ['L_Name'=>$request->get('L_Name')]);
                                                      
                                              //->update(['L_Name'->$request->lname]);
        
        return response()->json([
            "status"=>"Success"
        ]);
    }
}
