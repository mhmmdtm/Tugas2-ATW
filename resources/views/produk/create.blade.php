@extends('template.base')

@section('content')

<div class="container">
		<div class="row">
			<div class="col-md-10 mt-5">
				<div class="card">
					<div class="card-header">
						<h3>Tambah Data Produk<h3> <br>
					</div>
					<div class="card-body">
						<form action="{{url('produk')}}" method="post">
						@csrf
						<div class="form-group">
							<label for="" class="control-label">Nama</label>
							<input type="text" class="form-control" name="nama">
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="" class="control-label">Harga</label>
									<input type="text" class="form-control" name="harga">
								</div>
							</div>
							<div class="col-md-2">
								<div class="form-group">
									<label for="" class="control-label">Stok</label>
									<input type="text" class="form-control" name="stok">
								</div>
							</div>
							<div class="col-md-2">
								<div class="form-group">
									<label for="" class="control-label">Ukuran</label>
									<input type="text" class="form-control" name="ukuran">
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="control-label">Deskripsi</label>
							<textarea name="deskripsi" class="form-control"></textarea>
						</div>
						<button class="btn btn-dark"><i class="fa fa-save"></i> &nbsp Simpan</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection