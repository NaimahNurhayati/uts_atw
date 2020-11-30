@extends('template.base')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-12" style="padding: 10px 50px;">
			<div class="card">
				<div class="card-header">
					<h5 style="text-align: center;">Data Admin</h5>
				</div>
				<div class="card-header">
					<a href="{{url('user/create')}}" class="btn btn-primary float-right"><i class="fa fa-plus"></i>Tambah Data</a>
				</div>
				<div class="card-body">
					<table class="table">
						<thead>
							<th>No</th>
							<th>Aksi</th>
							<th>Username</th>
							<th>Nama</th>
							<th>Artikel</th>
						</thead>
						<tbody>
							@foreach($list_user as $user)
							<tr>
								<td>{{$loop->iteration}}</td>
								<td>
									<div class="btn-group" style="display: flex;">
										<a href="{{url('user', $user->id)}}" class="btn btn-success"> <i class="fa fa-info"></i></a>
										<a href="{{url('user', $user->id)}}/edit" class="btn btn-warning"> <i class="fa fa-edit"></i></a>
										@include('template.utils.delete', ['url' => url('user', $user->id)])
									</div>
								</td>
								<td>{{$user->username}}</td>
								<td>{{$user->nama}}</td>
								<td>{{$user->artikel_count}}</td>
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