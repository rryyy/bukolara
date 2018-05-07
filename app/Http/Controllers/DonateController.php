<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Donate;
class DonateController extends Controller
{
    //
    public function Donate(Request $request)
    {
    	$donation = new Donate;
    	$donation->postid = $request->postid;
    	$donation->userid = $request->userid;
    	$donation->amount = $request->amount;
    	$donation->status = $request->status;
    	$donation->save();
    	return $request;
    }
}
