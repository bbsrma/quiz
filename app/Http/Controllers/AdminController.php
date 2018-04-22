<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Collection;

class AdminController extends Controller
{
    //
    public function dashboard(){
        return view('dashboard');
    }
    protected function register(){
    	return view('register');

    }
    protected function login(){
    	return view ('adminlogin');

    }
    protected function home(){
    	return view('dashboard');

    }
    public function createquiz(){

    	return view('createquiz');
    }
    public function createquizpost(Request $request){
        $collection = new Collection;
        $collection->title=$request->get('title');
        $collection->type=$request->get('type');
        $collection->description=$request->get('description');
        $collection->save();

    	return redirect('/dashboard');
    }
    public function quiz(Request $request){

    	return view('quiz');
    }
    public function showquestion(){
        $quizs= Collection::all()->groupBy('type')->get();
        return $quiz;
        
        return View('questions',compact('quizs'));
    }
    public function postquestion(Request $request){

        return $request->all();
    }
}
