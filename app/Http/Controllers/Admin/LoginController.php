<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class LoginController extends Controller
{
    //
	public function getLogin(){
		return view('backend.login');
	}

	public function postLogin(Request $request){
		$arr=['mail'=>$request->email,'password'=>$request->password];
		//ghi nho trang thai dang nhap
		if($request->remember='Remember'){
			$remember=true;
		}else{
			$remember=false;
		}

		if(Auth::attempt($arr,$remember)){
			return redirect()->intended('admin/home');
		}else{
			return back()->withInput()->with('error','Tai khoan hoac mat khau khong dung');
		}
	}








}
