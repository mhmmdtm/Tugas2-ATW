@extends('template.base')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-12 mt-5">
				<div class="card">
					<div class="card-header">
						<h3>Data Produk</h3> <br>
						<a href="{{url('produk/create')}}" class="btn btn-dark float-right"><i class="fa fa-plus"></i> &nbsp Tambah Data</a>
					</div>
					<div class="card-body">
						<table class="table">
							<thead>
								<th>No</th>
								<th></th>
								<th>Aksi</th>
								<th></th>
								<th>Nama</th>
								<th>Harga</th>
								<th>Stok</th>
							</thead>
							<tbody>
								@foreach($list_produk as $produk)
								<tr>
									<td>{{$loop->iteration}}</td>
									<td width="20px">
										<a href="{{url('produk', $produk->kode)}}" class="btn btn-dark"><i class="fa fa-info"></i></a>
									</td>
									<td width="20px">
										<a href="{{url('produk', $produk->kode)}}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>
									</td>
									<td width="20px">
										@include('template.utils.delete', ['url' => url('produk', $produk->kode)])
									</td>
									<td>{{$produk->nama}}</td>
									<td>{{$produk->harga}}</td>
									<td>{{$produk->stok}}</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection