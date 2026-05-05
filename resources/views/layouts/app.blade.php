<!DOCTYPE html>
<html lang="en">

	<head>
		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="Monoline - Design Agency HTML Template">
		<meta name="keywords" content="agency, business, corporate, creative, html5, modern, multipurpose, One Page, parallax, startup ">		
		<!-- SITE TITLE -->
		<title>@yield('title', 'SA Business Solutions Group')</title>			
		<!-- Latest Bootstrap min CSS -->
		<link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">		
		<!-- Google Font -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800"> 
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600">			
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700;900&display=swap">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700;800&display=swap">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Syne:wght@400;700;800&display=swap">
		<!-- Font Awesome CSS -->
		<link rel="stylesheet" href="{{ asset('fonts/font-awesome.min.css') }}">
		<link rel="stylesheet" href="{{ asset('fonts/themify-icons.css') }}">
		<!--- owl carousel Css-->
		<link rel="stylesheet" href="{{ asset('owlcarousel/css/owl.carousel.css') }}">
		<link rel="stylesheet" href="{{ asset('owlcarousel/css/owl.theme.css') }}">
		<!--materialdesignicons Css-->
        <link rel="stylesheet" href="{{ asset('css/fonts.css') }}">		
		<!-- animate CSS -->
		<link rel="stylesheet" href="{{ asset('css/animate.css') }}">					
		<!-- MAGNIFIC CSS -->
		<link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">					
		<!-- Style CSS -->						
		<link rel="stylesheet" href="{{ asset('css/menu.css') }}">			
		<link rel="stylesheet" href="{{ asset('css/style.css') }}">			
		<link rel="stylesheet" href="{{ asset('css/responsive.css') }}">			
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
        @yield('styles')
        <style>
            /* Sticky Header Logo Fix */
            .is-sticky .site-logo .sa-mark {
                color: #FFAE00 !important;
            }
            .is-sticky .site-logo .logo-sol {
                color: #222 !important;
            }
        </style>
	</head>
	
    <body data-spy="scroll" data-offset="80">

		<!-- START PRELOADER -->
		<div class="preloader">
			<div class="spinner">
				<div class="double-bounce1"></div>
				<div class="double-bounce2"></div>
			</div>
		</div>
		<!-- END PRELOADER -->		

        @include('partials.navbar')

        @yield('content')

        @include('partials.footer')
	
        @include('partials.scripts')
        @yield('scripts')
    </body>
</html>
