<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	
	
	<link rel="shortcut icon" href="images/favicon.png">
	<title>RS Kartika Husada</title>
	<link href="{{url('polo')}}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="{{url('polo')}}/vendor/fontawesome/css/font-awesome.min.css" type="text/css" rel="stylesheet">
	<link href="{{url('polo')}}/vendor/animateit/animate.min.css" rel="stylesheet">
	<link href="{{url('polo')}}/vendor/owlcarousel/owl.carousel.css" rel="stylesheet">
	<link href="{{url('polo')}}/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">
	<link href="{{url('polo')}}/css/theme-base.css" rel="stylesheet">
	<link href="{{url('polo')}}/css/theme-elements.css" rel="stylesheet">	
	<link href="{{url('polo')}}/css/responsive.css" rel="stylesheet">

	<!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->		
	<link href="{{url('polo')}}/css/color-variations/blue.css" rel="stylesheet" type="text/css" media="screen" title="blue">
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,800,700,600%7CRaleway:100,300,600,700,800" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="css/custom.css" media="screen" />
    <script src="{{url('polo')}}/vendor/jquery/jquery-1.11.2.min.js"></script>
    <script src="{{url('polo')}}/vendor/plugins-compressed.js"></script>

</head>

<body class="wide">
	
	<div class="wrapper">

		@include('layouts.navbar')

<!-- PAGE TITLE -->
	<section id="page-title" class="page-title-parallax" style="background-image:url({{url('images')}}/rs1.jpg); background-size: cover;">
	    <div class="container">
	        <div class="page-title col-md-8" data-animation="fadeInDown" data-animation-delay="300">
	            <h1>{{ $title }}</h1>
	            <h3>{{ $content }}</h3>
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

	<section>
		<div class="container">
			@yield('main')
		</div>
	</section>

		@include('layouts.footer')
	</div>

<a class="gototop gototop-button" href="#"><i class="fa fa-chevron-up"></i></a>

	<script src="{{url('polo')}}/js/theme-functions.js"></script>

	<script src="{{url('polo')}}/js/custom.js"></script>

</body>
</html>



