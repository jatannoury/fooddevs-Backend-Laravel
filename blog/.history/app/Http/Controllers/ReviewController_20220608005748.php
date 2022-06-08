<?php

namespace App\Http\Controllers;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function addReview(Request $request){
        $review=new Review;
        $review->user_id= $request->user_id;

        $review->restaurant_name=$request->restaurant_name;
        $review->review=$request->review;
        $review->rating=$request->rating;
        $review->state=$request->state;
        $review->save();
        return response()->json([
            "status"=>"Success",
        ],200);
    }

    // public function monitorReview($restaurant_name,$user_id,$state){
    //     $review=Review::where("restaurant_name",$restaurant_name)->where("user_id",$user_id)->get();
    //     $review=$review[0];
    //     $review->update(["state"=>$state]);
    //     return response()->json([
    //         "status"=>"Success",
    //         "get"=>$review
    //     ],200);
    // }
    public function getReview(){
        $reviews=Review::all()->where("state",1);
        return response()->json([
                    "status"=>"Success",
                    "get"=>$reviews
                ],200);
    }

}
