<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function Register(Request $request)
    {
        $checkEmail = User::where('email', $request->email)->get();
        if(count($checkEmail) > 0){
           return $checkEmail;
        } else {
            $register = new User;
            $register->name = $request->name;
            $register->email = $request->email;
            $register->contact = $request->contact;
            $register->city = $request->city;
            $register->province = $request->province;
            $register->birthday = $request->birthday;
            $register->gender = $request->gender;
            $register->password = bcrypt($request->password);         
            if($request->gender == "f")
            {
                $register->displayphoto = "assets/imgs/girl-commuter.png";
            }
            if($request->gender == "m")
            {
               $register->displayphoto = "assets/imgs/boy-commuter.png";
            }
            $register->save();
            return response()->json(['status' => '200','last_insert_id' => $register->id]);
        }
    }
    public function Login(Request $request)
    {
        $logg = User::where('email',$request->email)->first();
        if( !empty($logg) ) {
            if(Hash::check($request->password, $logg->password)){
                return $logg;
            }
            else{
                return response()->json(['status' => '!password']);
            }             
        }
        return response()->json(['status' => '!account']);
        // return $logg;
    }
    public function ProfilePhoto(Request $request)
    {
        $logg = User::where('id',$request->id)->get();
        return $logg;
    }
    public function testalluser()
    {
         $users = User::orderBy('created_at', 'desc')->get();
        return $users;       
    }
}
