<?php

namespace laravel_project\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class FlowerController extends Controller
{
    public function flower($id){
    	$flower = DB::table('pictures')->where('id',$id)->first();
    	if($flower === null ) //Check if the flower is null
    		return redirect()->to('about'); //Redirect to url
    		//abort(404); //Exit application
    	

    	return view('flower' ,compact('flower') );

    }

    public function showFlower(){
    	$flowers = DB::table('pictures')->get();
    	return view('showFlower', compact('flowers'));
    }
}
