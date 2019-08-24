<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //
    // public function getHome(){
    // 	return view('frontend.index');
    // }
	public function getComplete(){
		return view('frontend.comlete');
	}

}
