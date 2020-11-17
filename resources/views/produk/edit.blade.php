@extends('template.base')

@section('content')

<div class="container">
		<div class="row">
			<div class="col-md-10 mt-5">
				<div class="card">
					<div class="card-header">
						Ubah Data Produk
					</div>
					<div class="card-body">
						<form action="{{url('produk', $produk->kode)}}"  method="post">
						@csrf
						@method("put")
						<div class="form-group">
							<label for="" class="control-label">Nama</label>
							<input type="text" class="form-control" name="nama" value="{{$produk->nama}}">
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="" class="control-label">Harga</label>
									<input type="text" class="form-control" name="harga" value="{{$produk->harga}}">
								</div>
							</div>
							<div class="col-md-2">
								<div class="form-group">
									<label for="" class="control-label">Stok</label>
									<input type="text" class="form-control" name="stok" value="{{$produk->stok}}">
								</div>
							</div>
							<div class="col-md-2">
								<div class="form-group">
									<label for="" class="control-label">Ukuran</label>
									<input type="text" class="form-control" name="ukuran" value="{{$produk->ukuran}}">
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="control-label">Deskripsi</label>
							<textarea name="deskripsi" class="form-control" value="{{$produk->deskripsi}}"></textarea>
						</div>
						<button class="btn btn-dark"><i class="fa fa-save"></i> &nbsp Simpan</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection