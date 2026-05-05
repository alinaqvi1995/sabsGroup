<!-- START NAVBAR -->
<div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
    <div class="site-mobile-menu-close mt-3">
        <span class="icon-close2 js-menu-toggle"></span>
    </div>
    </div>
    <div class="site-mobile-menu-body"></div>
</div>

<header class="site-navbar js-sticky-header site-navbar-target" role="banner">
    <div class="container">
    <div class="row align-items-center">       
        <div class="col-6 col-xl-2">
        <h1 class="mb-0 site-logo"><a href="{{ url('/') }}"><img src="{{ asset('img/logo.png') }}" alt=""></a></h1>
        </div>
        <div class="col-12 col-md-10 d-none d-xl-block">
        <nav class="site-navigation position-relative text-right" role="navigation">
            <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
            <li class="has-children">
                <a href="{{ url('/') }}" class="nav-link">Home</a>
                <ul class="dropdown">
                <li><a href="#" class="nav-link">Home Two</a></li>
                <li><a href="#" class="nav-link">Home Three</a></li>
                </ul>
            </li>	
            <li><a class="nav-link" href="#">About</a></li>
            <li class="has-children">
                <a href="#" class="nav-link">Services</a>
                <ul class="dropdown">
                <li><a href="#" class="nav-link">Email Marketing</a></li>
                <li><a href="#" class="nav-link">Offline SEO</a></li>
                <li><a href="#" class="nav-link">Social media marketing</a></li>
                <li><a href="#" class="nav-link">Lead Generation</a></li>
                <li><a href="#" class="nav-link">Web Design</a></li>
                <li><a href="#" class="nav-link">Search Engine optimization</a></li>
                </ul>
            </li>					 
                <li><a class="nav-link" href="#">Case Study</a></li>									
            <li class="has-children">
                <a href="#" class="nav-link">Portfolio</a>
                <ul class="dropdown">
                <li><a href="#" class="nav-link">Portfolio Gallery</a></li>
                <li><a href="#" class="nav-link">Portfolio Project</a></li>
                <li><a href="#" class="nav-link">Single Project</a></li>
                </ul>
            </li>	
            <li class="has-children">
                <a href="#" class="nav-link">Pages</a>
                <ul class="dropdown">
                <li><a href="#" class="nav-link">About</a></li>
                <li><a href="#" class="nav-link">Faq Page</a></li>
                <li><a href="#" class="nav-link">404 Page</a></li>
                <li><a href="#" class="nav-link">Team Member</a></li>
                <li><a href="#" class="nav-link">Pricing</a></li>
                </ul>
            </li>					
            <li class="has-children">
                <a href="#" class="nav-link">Blog</a>
                <ul class="dropdown">
                <li><a href="#" class="nav-link">Blog No Sidebar</a></li>
                <li><a href="#" class="nav-link">Blog With Sidebar</a></li>
                <li><a href="#" class="nav-link">Single Blog</a></li>
                </ul>
            </li>				
                <li><a class="nav-link" href="#">Contact</a></li>					
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
