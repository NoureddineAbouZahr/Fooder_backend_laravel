<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\review;

class reviews_controller extends Controller
{
    public function addReview(Request $request){
        $rev = new review;
        $rev->Feedback = $request->fb;
        $rev->User_U_Id = $request->uid;
        $rev->Restaurant_R_Id = $request->rid;
        $rev->Rating = $request->str;
        
        if($rev->Rating==null){
            return response()->json([
                "status" => "failed"
            ], 200);
        }else{
            $rev->save();
        return response()->json([
            "status" => "Success"
        ], 200);}
    }
    public function getRevById(Request $request){
        $rev = review::where("Restaurant_R_Id","=",$request->rid)->get();
        
        return response()->json([
            "status" => "Success",
            "results" => $rev
        ], 200);
    }
}
