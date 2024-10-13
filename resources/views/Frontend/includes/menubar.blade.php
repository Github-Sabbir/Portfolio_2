<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
      <a href="{{ route('homePage')}}" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="{{ asset('/') }}/Frontend/assets/img/logo.png" alt="">
        <h1 class="sitename">My Portfolio</h1>
      </a>
      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="{{ route('homePage')}}" class="{{ request()->is('/') ? 'active' : ''}}">Home</a></li>
          <li><a href="{{ route('aboutPage')}}" class="{{ request()->is('About') ? 'active' : ''}}">About</a></li>
          <li><a href="{{ route('resumePage')}}" class="{{ request()->is('Resume') ? 'active' : ''}}">Resume</a></li>
          <li><a href="{{ route('servicesPage')}}" class="{{ request()->is('Services') ? 'active' : ''}}">Services</a></li>
          <li><a href="{{ route('projectsPage')}}" class="{{ request()->is('Projects') ? 'active' : ''}}">Projects</a></li>
          <li><a href="{{ route('contactPage')}}" class="{{ request()->is('Contact') ? 'active' : ''}}">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
    </div>
  </header>