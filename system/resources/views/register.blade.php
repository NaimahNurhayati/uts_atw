@extends('templateuser.base')

@section('content')

<!-- register -->
<div class="sign-up-form">
  <h3>Register Here</h3>
  <p>Untuk menjadi penulis diblog silahkan untuk melakukan registrasi pendaftaran disini</p>
  <div class="sign-up">
    <h5>Personal Information</h5>
    <form action="{{url('register')}}" method="post">
      @csrf
      <div class="sign-u">
        <div class="sign-up1">
          <h4 class="a">Nama* :</h4>
        </div>
        <div class="sign-up2">
          <input type="text" placeholder="" required=" " name="nama" />
        </div>
        <div class="clearfix"> </div>
      </div>
      <!-- <div class="sign-u">
      <div class="sign-up1">
        <h4 class="c">Email Address* :</h4>
      </div>
      <div class="sign-up2">
        <form>
          <input type="text" placeholder=" " required=" " name="email" />
        </form>
      </div>
      <div class="clearfix"> </div>
     </div> -->
      <h6>Login Information</h6>
      <div class="sign-u">
        <div class="sign-up1">
          <h4 class="d">Username* :</h4>
        </div>
        <div class="sign-up2">
          <input type="text" placeholder="" required=" " name="username" />
        </div>
        <div class="clearfix"> </div>
      </div>
      <div class="sign-u">
        <div class="sign-up1">
          <h4>Password* :</h4>
        </div>
        <div class="sign-up2">
          <input type="password" placeholder="" required=" " name="password" />
        </div>
        <div class="clearfix"> </div>
      </div>
      <input type="submit" value="Register">
    </form>
  </div>
</div>
<!-- //register -->
@endsection