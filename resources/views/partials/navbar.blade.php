<!-- START NAVBAR -->
<div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
    <div class="site-mobile-menu-close mt-3">
        <span class="icon-close2 js-menu-toggle"></span>
    </div>
    </div>
    <div class="site-mobile-menu-body">
    <ul class="site-nav-wrap">
        <li><a href="{{ route('home') }}" class="nav-link">Home</a></li>
        <li><a href="{{ route('workforce') }}" class="nav-link">Workforce Solutions</a></li>
        <li><a href="{{ route('technology') }}" class="nav-link">Technology & Infrastructure</a></li>
        <li><a href="{{ route('supply') }}" class="nav-link">Supply & Procurement Solutions</a></li>
        <li><a href="{{ route('about') }}" class="nav-link">About Us</a></li>
        <li><a href="{{ route('contact') }}" class="nav-link">Connect With Us</a></li>
    </ul>
  </div>
</div>

<header class="site-navbar js-sticky-header site-navbar-target" role="banner">
    <div class="container">
    <div class="row align-items-center">       
        <div class="col-6 col-xl-2">
        <h1 class="mb-0 site-logo">
            <a href="{{ url('/') }}" style="text-decoration: none;">
                <span style="font-family: 'Montserrat', sans-serif; font-size: 1.5rem; font-weight: 700; color: #FFAE00; line-height: 1; display: block; text-transform: uppercase; letter-spacing: 1px;">SABS <span style="font-weight: 500; color: #fff;">GROUP</span></span>
                <span style="font-family: 'Montserrat', sans-serif; font-size: 0.55rem; font-weight: 600; letter-spacing: 3px; color: #fff; text-transform: uppercase; display: block; margin-top: 5px; opacity: 1;">Business Solutions</span>
            </a>
        </h1>
        </div>
        <div class="col-12 col-md-10 d-none d-xl-block">
        <nav class="site-navigation position-relative text-right" role="navigation">
            <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
            <li class="{{ request()->is('index') ? 'active' : '' }}">
                <a href="{{ route('home') }}" class="nav-link">Home</a>
            </li>	
            <li class="{{ request()->is('workforce-solutions') ? 'active' : '' }}">
                <a href="{{ route('workforce') }}" class="nav-link">Workforce Solutions</a>
            </li>
            <li class="{{ request()->is('technology-infrastructure') ? 'active' : '' }}">
                <a href="{{ route('technology') }}" class="nav-link">Technology & Infrastructure</a>
            </li>
            <li class="{{ request()->is('supply-procurement-solutions') ? 'active' : '' }}">
                <a href="{{ route('supply') }}" class="nav-link">Supply & Procurement Solutions</a>
            </li>
            <li class="{{ request()->is('about-us') ? 'active' : '' }}">
                <a href="{{ route('about') }}" class="nav-link">About Us</a>
            </li>					 
            <li class="{{ request()->is('contact') ? 'active' : '' }}">
                <a href="{{ route('contact') }}" class="nav-link">Connect With Us</a>
            </li>
					
            </ul>
        </nav>
        </div>
        <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;">
        <a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a>
        </div>
    </div>
    </div>
</header>
<!-- END NAVBAR-->
