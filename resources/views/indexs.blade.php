<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	
	
	<link rel="shortcut icon" href="images/favicon.png">
	<title>RS Kartika Husada</title>

	<!-- Bootstrap Core CSS -->
	<link href="{{url('polo')}}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="{{url('polo')}}/vendor/fontawesome/css/font-awesome.min.css" type="text/css" rel="stylesheet">
	<link href="{{url('polo')}}/vendor/animateit/animate.min.css" rel="stylesheet">

	<!-- Vendor css -->
	<link href="{{url('polo')}}/vendor/owlcarousel/owl.carousel.css" rel="stylesheet">
	<link href="{{url('polo')}}/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

	<!-- Template base -->
	<link href="{{url('polo')}}/css/theme-base.css" rel="stylesheet">

	<!-- Template elements -->
	<link href="{{url('polo')}}/css/theme-elements.css" rel="stylesheet">	
    
    
	<!-- Responsive classes -->
	<link href="{{url('polo')}}/css/responsive.css" rel="stylesheet">

	<!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->		

	<!-- Template color -->
	<link href="{{url('polo')}}/css/color-variations/blue.css" rel="stylesheet" type="text/css" media="screen" title="blue">

	<!-- LOAD GOOGLE FONTS -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,800,700,600%7CRaleway:100,300,600,700,800" rel="stylesheet" type="text/css" />

	<!-- CSS CUSTOM STYLE -->
    <link rel="stylesheet" type="text/css" href="css/custom.css" media="screen" />

    <!--VENDOR SCRIPT-->
    <script src="{{url('polo')}}/vendor/jquery/jquery-1.11.2.min.js"></script>
    <script src="{{url('polo')}}/vendor/plugins-compressed.js"></script>

</head>

<body class="wide">
	

	<!-- WRAPPER -->
	<div class="wrapper">

		<!-- HEADER -->
		<header id="header" class="header-transparent">
			<div id="header-wrap">
				<div class="container">

					<!--LOGO-->
					<div id="logo">
						<a href="" class="logo" data-dark-logo="{{URL('/images/logos.jpg')}}">
							<img src="{{URL('/images/logos.jpg')}}" alt="Polo Logo">
						</a>
					</div>
					<!--END: LOGO-->

					<!--MOBILE MENU -->
					<div class="nav-main-menu-responsive">
						<button class="lines-button x">
							<span class="lines"></span>
						</button>
					</div>
					<!--END: MOBILE MENU -->

					<!--SHOPPING CART -->
					<!-- <div id="shopping-cart">
						<span class="shopping-cart-items">8</span>
						<a href="shop-cart.html"><i class="fa fa-shopping-cart"></i></a>
					</div> -->
					<!--END: SHOPPING CART -->

					<!--TOP SEARCH -->
					<!-- <div id="top-search"> <a id="top-search-trigger"><i class="fa fa-search"></i><i class="fa fa-close"></i></a>
						<form action="search-results-page.html" method="get">
							<input type="text" name="q" class="form-control" value="" placeholder="Start typing & press  &quot;Enter&quot;">
						</form>
					</div> -->
					<!--END: TOP SEARCH -->
<!--NAVIGATION-->
					<div class="navbar-collapse collapse main-menu-collapse navigation-wrap">
						<div class="container">
							<nav id="mainMenu" class="main-menu mega-menu">
								<ul class="main-menu nav nav-pills">
									<li><a href="{{url('/')}}"><i class="fa fa-home"></i>Beranda</a>
									</li>
									
									<li class="dropdown"> <a href="#">Jadwal <i class="fa fa-angle-down"></i> </a>
										<ul class="dropdown-menu">
											<li class=""> <a href="{{url('/')}}">Dokter</a>
												
											</li>
											<!-- <li class=""> <a href="{{url('/')}}">Sliders</a>
												
											</li> -->
										</ul>
									</li>
									<li class="dropdown"> <a href="{{url('/')}}">Layanan <i class="fa fa-angle-down"></i> </a>
										<ul class="dropdown-menu">
											<li class=""> <a href="{{url('/')}}">Cek Ruang Rawat Inap</a>
												
											</li>
											<!-- <li class=""> <a href="#">Sliders</a>
												
											</li> -->
										</ul>
									</li>

									<li class=""> <a href="{{url('/')}}"> Fasilitas</a>
									</li>
									<li class=""> <a href="{{url('/')}}">Kontak</a>	
									</li>
									<li class=""> <a href="{{url('/')}}">Login</a>	
									</li>
									
								</ul>
							</nav>
						</div>
					</div>
					<!--END: NAVIGATION-->
				</div>
			</div>
		</header>
		<!-- END: HEADER -->
    

<!-- PAGE TITLE -->
<section id="page-title" class="page-title-parallax" style="background-image:url(images/parallax/page-title-parallax.jpg);">
    <div class="container">
        <div class="page-title col-md-8" data-animation="fadeInDown" data-animation-delay="300">
            <h1>Selamat Datang </h1>
            <h3>Di Rumah Sakit Kartika Husada</h3>
        </div>
        <div class="breadcrumb col-md-4" data-animation="fadeInDown" data-animation-delay="800">
            <ul>
                <li><a href="#"><i class="fa fa-home"></i></a>
                </li>
                <li><a href="#">Beranda</a>
                </li>
                <!-- <li><a href="#"></a>
                </li>
                <li class="active"><a href="#"></a>
                </li> -->
            </ul>
        </div>
    </div>
</section>
<!-- END: PAGE TITLE -->


<!-- SECTION -->
<section>
	<div class="container">
		@yield('main')
	</div>
</section>
<!-- END: SECTION -->
<!-- FOOTER -->
@include('layouts.footer')
<!-- END: FOOTER -->

</div>
<!-- END: WRAPPER -->

<!-- GO TOP BUTTON -->
<a class="gototop gototop-button" href="#"><i class="fa fa-chevron-up"></i></a>

	<!-- Theme Base, Components and Settings -->
	<script src="{{url('polo')}}/js/theme-functions.js"></script>

<!-- Custom js file -->
<script src="{{url('polo')}}/js/custom.js"></script>


</body>
</html>



