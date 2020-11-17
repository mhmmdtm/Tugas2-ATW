<?php

namespace App\Http\Controllers;
use Auth;

class authcontroller extends Controller{

	function showLogin () {
		return view("loginadmin");
	}
	function processLogin() {
		if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){
			return redirect('homeadmin')->with('success', 'Login berhasil');
		}else{
			return back()->with('danger', 'Login gagal, silahkan cek email dan password anda');
		}
	}
	function logout() {
		Auth::logout();
		return redirect('loginadmin');
	}
	function registration() {

	}
	function forgotPassword() {

	}
}