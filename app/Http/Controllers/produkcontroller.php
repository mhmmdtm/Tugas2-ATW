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
		$produk->harga = request('harga');
		$produk->stok = request('stok');
		$produk->ukuran = request('ukuran');
		$produk->deskripsi = request('deskripsi');
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
		$produk->harga = request('harga');
		$produk->stok = request('stok');
		$produk->ukuran = request('ukuran');
		$produk->deskripsi = request('deskripsi');
		$produk->save();
		return redirect('produk')->with('success', 'Data berhasil diedit');
	}
	function destroy(Produk $produk) {
		$produk->delete();
		return redirect('produk')->with('danger', 'Data berhasil dihapus');
	}
}