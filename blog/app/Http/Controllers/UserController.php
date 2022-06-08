<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;


class UserController extends Controller
{
    public function addUser(Request $request){//function responsible for signing up.
        $user=new User;
        $user->name= $request->name;
        $user->email=$request->email;
 
        $user->password=$request->password;
        $user->save();
        return response()->json([
            "status"=>"Success",
        ],200);
    }

    public function getUsers($id=null){//function responsible to get users.
        if ($id){
            $user=User::find($id); 
            $user=$user?$user->name:"";
        }else{
            $user=User::all();
        }
        
        return response()->json([
            "status"=>"Success",
            "restaurants"=>$user
        ],200);
    }
    public function login(Request $request){// login API
        $email= $request->email;
        $password=$request->password;
        $user_email=User::where("email",$email)->get(); 
        $user_email=$user_email?$user_email:"";
        if (count($user_email)==0){
            return response()->json([
                "status"=>"Wrong email or password",
                "email"=>$email
            ],200);
        }
        if ($password!=$user_email[0]["password"]){
            return response()->json([
                "status"=>"Wrong email or password",
            ],200);
        }
        return response()->json([
            "status"=>"Success",
            "result"=>$user_email
        ],200);
    }
}
