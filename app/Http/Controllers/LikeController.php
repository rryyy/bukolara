<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Like;

class LikeController extends Controller
{
    //
    public function Like(Request $request)
    {
    	$checkLike = Like::where('user_id',$request->user_id)->where('post_id',$request->post_id)->first();
    	if(!empty($checkLike))
    	{
    		$unliked = Like::where('user_id',$request->user_id)->where('post_id',$request->post_id)->delete();
    		return $unliked;
    	} else {
    		$liked = new Like;
    		$liked->user_id = $request->user_id;
    		$liked->post_id = $request->post_id;
    		$liked->save();
    		return $liked;
    	}
    }
}
