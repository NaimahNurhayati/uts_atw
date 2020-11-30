@extends('template.base')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12" style="padding: 10px 50px;">
      <div class="card">
        <div class="card-header">
          <h5 style="text-align: center;">Komentar</h5>
        </div>
        <div class="card-body">
          @foreach($list_komentar as $komentar)
          <div class="card">
            <div class="d-flex bd-highlight">
              <div class="p-2 bd-highlight">
                <img src="{{url('public')}}/assets/images/66.jpg" alt="" class="img-fluid radius-image news-image" style="width:80px;">
              </div>
              <div class="p-2 bd-highlight">
                <h5>{{$komentar->nama}}</h5>mengomentari artikel anda
                <span>Pada tanggal {{$komentar->created_at}}</span>
              </div>
              <div class="ml-auto p-2 bd-highlight mt-2">
                <div class="btn-group">
                  <a href="{{url('komentar', $komentar->id)}}" class="btn btn-success"> <i class="fa fa-info"></i></a>
                  @include('template.utils.delete', ['url' => url('komentar', $komentar->id)])
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</div>
@endsection