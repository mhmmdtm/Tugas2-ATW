<?php

namespace App\Http\Controllers;
use App\Models\Produk;

class produkcontroller extends Controller {

	function index() {
		$data['list_produk'] = Produk::all();
		return view('produk.index', $data);
	}
	function create() {
		return view('produk.create');
	}
	function store() {
		$produk = new Produk;
		$produk->nama = request('nama');
		$produk->nama = request('harga');
		$produk->nama = request('stok');
		$produk->nama = request('ukuran');
		$produk->nama = request('deskripsi');
		$produk->save();
		return redirect('produk')->with('success', 'Data berhasil ditambahkan');
	}
	function show(Produk $produk) {
		$data['produk'] = $produk;
		return view('produk.show', $data);

	}
	function edit(Produk $produk) {
		$data['produk'] = $produk;
		return view('produk.edit', $data);
	}
	function update(Produk $produk) {
		$produk->nama = request('nama');
		$produk->nama = request('harga');
		$produk->nama = request('stok');
		$produk->nama = request('ukuran');
		$produk->nama = request('deskripsi');
		$produk->save();
		return redirect('produk')->with('success', 'Data berhasil diedit');
	}
	function destroy(Produk $produk) {
		$produk->delete();
		return redirect('produk')->with('danger', 'Data berhasil dihapus');
	}
}