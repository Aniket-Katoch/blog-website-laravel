<!-- Navbar Start -->
<nav class="main-nav navbar navbar-expand-lg">
    <div class="container">
      <!-- Logo -->
      <a class="navbar-brand" href="index.html">
        <img class="logo-main" src="{{asset('frontendtemplate/images/logo.svg')}}" alt="logo" />
      </a>
      <!-- Toogle Button -->
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#mainNav">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <div class="collapse navbar-collapse nav-list" id="mainNav">
        <!-- Navigation Links -->
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="{{url('/')}}">Home </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('about') }}">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('contact') }}">Contact</a>
          </li>
        </ul>
        <!-- Social Link -->
        <ul class="main-nav-social">
          <li>
            <a href="#"><i class="fa fa-facebook"></i></a>
          </li>
          <li>
            <a href="#"><i class="fa fa-twitter"></i></a>
          </li>
          <li>
            <a href="#"><i class="fa fa-instagram"></i></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Navbar End -->