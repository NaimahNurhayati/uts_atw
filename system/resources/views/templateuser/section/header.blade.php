@php
function checkRouteActive($route){
if(Route::current()-> uri == $route) return 'active';
}
@endphp
<div class="header-nav">
  <nav class="navbar navbar-default">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
      </button>
      <a class="navbar-brand" href="{{url('template')}}"><span>N</span>aiBlog's</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="hvr-bounce-to-bottom {{checkRouteActive('template')}}"><a href="{{url('template')}}">Home</a></li>
        <li class="hvr-bounce-to-bottom {{checkRouteActive('artikeluser')}}"><a href="{{url('artikeluser')}}">Artikel</a></li>
        <li class="hvr-bounce-to-bottom {{checkRouteActive('kontak')}}"><a href="{{url('kontak')}}">Contact Us</a></li>
      </ul>
      <div class="sign-in">
        <ul>
          <li><a href="{{url('login')}}">Sign In </a>/</li>
          <li><a href="{{url('register')}}">Register</a></li>
        </ul>
      </div>
    </div><!-- /.navbar-collapse -->
  </nav>
</div>