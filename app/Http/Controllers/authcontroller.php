<?php

namespace App\Http\Controllers;

class authcontroller extends Controller{

	function showLogin () {
		return view("loginadmin");
	}
	function processLogin() {
		dd(request()->all());
	}
	function logout() {

	}
	function registration() {

	}
	function forgotPassword() {

	}
}