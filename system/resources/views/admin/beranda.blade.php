@extends('template.base')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <div class="text-container" style="text-align: center; margin: 150px 100px 200px 100px">
        <h2>SELAMAT DATANG @if(Auth::check())
          {{request()->user()->nama}}
          @else
          ADMIN
          @endif</h2>
        <p class="p-heading p-large">Untuk memanajemen data</p>
      </div>
    </div> <!-- end of col -->
  </div> <!-- end of row -->
</div>
@endsection