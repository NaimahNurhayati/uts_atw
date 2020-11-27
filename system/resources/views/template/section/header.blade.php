<nav class="main-header navbar navbar-expand navbar-warning navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
  </ul>

  <!-- SEARCH FORM -->
  <form class="form-inline ml-3">
    <div class="input-group input-group-sm">
      <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
      <div class="input-group-append">
        <button class="btn btn-navbar" type="submit">
          <i class="fas fa-search"></i>
        </button>
      </div>
    </div>
  </form>

  <ul class="navbar-nav ml-auto">
    <li class="nav-item dropdown">
      <a class="nav-link" data-toggle="dropdown" href="#" style="color: lavender;">
        Administrator
        <i class="fas fa-user"></i></a>
      </a>
      <div class="dropdown-menu dropdown-menu-right">
        <a href="#" class="dropdown-item">
          <i class="fa fa-cog"></i> Settings
        </a>
        <a href="#" class="dropdown-item">
          <i class="fa fa-user"></i> Profile
        </a>
        <a href="{{url('logout')}}" class="dropdown-item">
          <i class="fa fa-sign-out-alt"></i> Logout
        </a>
      </div>
    </li>
  </ul>
</nav>