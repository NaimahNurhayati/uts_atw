@extends('templateuser.base')

@section('content')

<div class="login">
  <div class="login-grids">
    <div class="col-md-6 log">
      <h3>Login</h3>
      <p> Selamat datang, Jika Anda sebelumnya sudah pernah Login di blog kami,</p>
      <p> isi atau masukkan data pada form yang tersedia berikut ini untuk melanjutkan.</p>
      @include('template.utils.notif')
      <form action="{{url('login')}}" method="post">
        @csrf
        <h5>User Name:</h5>
        <input type="text" value="" name="username">
        <h5>Password:</h5>
        <input type="password" value="" name="password">
        <input type="submit" value="Login">

      </form>
      <a href="#">Forgot Password ?</a>
    </div>
    <div class="col-md-6 login-right">
      <h3>New Registration</h3>
      <p>Dengan membuat akun di Blog kami, Anda akan dapat menulis satu atau lebih artikel dan membalas setiap komentar pada setiap postingan artikel anda secara cepat dan mudah.</p>
      <a href="{{url('register')}}" class="hvr-bounce-to-bottom button">Create An Account</a>
    </div>
    <div class="clearfix"></div>
  </div>
</div>

@endsection