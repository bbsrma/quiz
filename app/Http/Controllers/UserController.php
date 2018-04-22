<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Collection;

class UserController extends Controller
{
    //
    public function showhome(){
    	$collections= Collection::all();
    	return view('userhome',compact('collections'));
    }
    public function result(){
    	return view('result');
    }
}
