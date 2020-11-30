@extends('template.base')

@section('content')

<div class="product-status mg-tb-15" style="height: 430px">
	<div class="container-fluid">
		<h3 style="text-align: center;">Tambah Data User</h3>
	</div>
	<form action="{{url('user')}}" method="post">
		@csrf
		<div class="card-body">
			<div class="form-group">
				<label for="" class="control-label"> Nama</label>
				<input type="text" class="form-control" name="nama">
			</div>
			<div class="form-group">
				<label for="" class="control-label"> Username</label>
				<input type="text" class="form-control" name="username">
			</div>
			<div class="form-group">
				<label for="" class="control-label"> Email</label>
				<input type="email" class="form-control" name="email">
			</div>

			<div class="form-group">
				<label for="" class="control-label"> Password</label>
				<input type="password" class="form-control" name="password">
			</div>

			<button class="btn btn-primary"> <i class="fa fa-save"></i>Simpan</button>

	</form>
</div>
</div>

@endsection