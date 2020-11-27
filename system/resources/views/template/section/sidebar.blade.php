@php
function checkRouteActive($route){
if(Route::current()-> uri == $route) return 'active';
}
@endphp

<aside class="main-sidebar sidebar-light-primary elevation-4">
  <!-- Brand Logo -->
  <a href="{{url('beranda')}}" class="brand-link" style="padding-left:35px;">
    <img src="{{url('public')}}/assets1/dist/img/logoo.jpg" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">BLOG-NAI</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="{{url('beranda')}}" class="nav-link {{checkRouteActive('beranda')}}">
            <i class="nav-icon fas fa-home"></i>
            <p>
              Beranda
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{url('artikel')}}" class="nav-link {{checkRouteActive('artikel')}}">
            <i class="nav-icon fa fa-book"></i>
            <p>
              Artikel
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{url('user')}}" class="nav-link {{checkRouteActive('user')}}">
            <i class="nav-icon fa fa-users"></i>
            <p>
              User
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{url('admin')}}" class="nav-link {{checkRouteActive('admin')}}">
            <i class="nav-icon fa fa-user"></i>
            <p>
              Admin
            </p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>