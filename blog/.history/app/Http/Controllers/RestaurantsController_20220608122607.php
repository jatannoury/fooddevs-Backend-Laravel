<?php

namespace App\Http\Controllers;
use App\Models\Restaurant;
use Illuminate\Http\Request;

class RestaurantsController extends Controller
{
    public function getAllRestaurants($id=null){//function responsible to check restaurants
        if ($id!=null){
            $restos=Restaurant::find($id); 
            $restos=$restos?$restos->name:"";
        }else{
            $restos=Restaurant::all();
        }
        
        return response()->json([
            "status"=>"Success",
            "restaurants"=>$restos
        ],200);
    }

    public function addRestaurants(Request $request){//function responsible to upload a restaurant
        $restos=new Restaurant;
        $restos->name= $request->name;
        $restos->email=$request->email;
        $restos->website=$request->website;
        $restos->save();
        return response()->json([
            "status"=>"Success",
        ],200);
    }

    public function getRestaurantByName(Request $request){//function responsible to check restaurants
        $name=$request->name;
        $restos=Restaurant::where("name","LIKE","%$name%")->get();
        if (!$restos){
            return response()->json([
                "status"=>"Not Found",
                
            ],200);
        }
        return response()->json([
            "status"=>"Success",
            "results"=>$restos
        ],200);
    }
}
