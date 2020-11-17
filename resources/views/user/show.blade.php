@extends('template.base')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-12 mt-5">
				<div class="card">
					<div class="card-header">
						<h3>Detail Data User<h3> <br>
					</div>
					<div class="card-body">
						<h3>{{$user->nama}}</h3>
						<hr>
						<p>
							{{"@".$user->username}} |
							Email : {{$user->email}}
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection