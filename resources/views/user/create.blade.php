@extends('template.base')

@section('content')

<div class="container">
		<div class="row">
			<div class="col-md-10 mt-5">
				<div class="card">
					<div class="card-header">
						<h3>Tambah Data User<h3> <br>
					</div>
					<div class="card-body">
						<form action="{{url('user')}}" method="post">
						@csrf
						<div class="form-group">
							<label for="" class="control-label">Nama</label>
							<input type="text" class="form-control" name="nama">
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="" class="control-label">Username</label>
									<input type="text" class="form-control" name="username">
								</div>
							</div>
							<div class="col-md-2">
								<div class="form-group">
									<label for="" class="control-label">Email</label>
									<input type="email" class="form-control" name="email">
								</div>
							</div>
							<div class="col-md-2">
								<div class="form-group">
									<label for="" class="control-label">Password</label>
									<input type="password" class="form-control" name="password">
								</div>
							</div>
						</div>
						<button class="btn btn-dark"><i class="fa fa-save"></i>Simpan</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection