<?php

namespace App\Http\Controllers;

class homecontroller extends Controller {



	function showHome () {
		return view('homeadmin');
	}

	function showProduk () {
		return view('produk');
	}

}
