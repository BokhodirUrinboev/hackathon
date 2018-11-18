<!-- navbar -->
<nav class="navbar navbar-expand-md social-rate-nav fixed-top">
  <div class="container">
    <!-- Brand -->
    <a class="navbar-brand mr-auto" href="/">
      <img src="{{asset('img/logo.svg')}}" class="logo" alt="logo">
      <img class="logo-desc" src="{{asset('img/socialrate.svg')}}" alt="">
    </a>

    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <img src="{{asset('img/ham.png')}}" alt="">
    </button>

    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link smooth" href="#section2">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link smooth" href="#section3">FAQs</a>
        </li> 
        <li class="nav-item">
          <a class="nav-link smooth" href="#footer">Support</a>
        </li> 
        <li class="nav-item">
          <a class="btn btn-primary" href="/login">Login</a>
        </li>
      </ul>
    </div> 
  </div>
</nav>