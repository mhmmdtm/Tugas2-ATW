@extends('template.base')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-12 mt-5">
				<div class="card">
					<div class="card-header">
						<h3>Data User</h3> <br>
						<a href="{{url('user/create')}}" class="btn btn-dark float-right"><i class="fa fa-plus"></i> &nbsp Tambah Data</a>
					</div>
					<div class="card-body">
						<table class="table">
							<thead>
								<th>No</th>
								<th></th>
								<th>Aksi</th>
								<th></th>
								<th>Username</th>
								<th>Nama</th>
								<th>Email</th>
							</thead>
							<tbody>
								@foreach($list_user as $user)
								<tr>
									<td>{{$loop->iteration}}</td>
									<td width="20px">
										<a href="{{url('user', $user->id)}}" class="btn btn-dark"><i class="fa fa-info"></i></a>
									</td>
									<td width="20px">
										<a href="{{url('user', $user->id)}}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>
									</td>
									<td width="20px">
										@include('template.utils.delete', ['url' => url('user', $user->id)])
									</td>
									<td>{{$user->username}}</td>
									<td>{{$user->nama}}</td>
									<td>{{$user->email}}</td>
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