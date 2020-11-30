@extends('template.base')

@section('content')

<div class="product-status mg-tb-15" style="height: 430px">
	<div class="container-fluid">
		<p>Detail Data User</p>

		<hr>
		<div class="card-body">
			<p>{{$user->nama}}</p>
			<p>
				{{"@".$user->username}} |
			</p>
			<p>Email : {{$user->detail->email}}</p>
		</div>
	</div>
</div>

@endsection