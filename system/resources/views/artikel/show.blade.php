@extends('template.base')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12" style="padding:10px 50px">
      <div class="card">
        <div class="card-header">
          {{$artikel->judul}}
        </div>
        <div class="card-body">
          <p>{!! nl2br($artikel->konten)!!}</p>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection