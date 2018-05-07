<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Boost;

class BoostController extends Controller
{
    //
    public function BoostPost(Request $request)
    {
    	$checkboost = Boost::where('post_id', $request->postid)->where('user_id', $request->userid)->get();
    	if(count($checkboost) > 0){
           return response()->json(['status' => 'boosted']);
        } else {
	    	$register = new Boost;
	    	$register->post_id = $request->postid;
	    	$register->user_id = $request->userid;
	    	$register->save();
	    	return $request;
        }
    }
}
