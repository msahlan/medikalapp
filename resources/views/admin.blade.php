<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>RS Kartika Husada</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
    <link rel="stylesheet" href="{{url('css')}}/bootstrap.css" />
    <link rel="stylesheet" href="{{url('css')}}/main.css" />
    <link rel="stylesheet" href="{{url('css')}}/theme.css" />
    <link rel="stylesheet" href="{{url('css')}}/MoneAdmin.css" />
    <link rel="stylesheet" href="{{url('css')}}/font-awesome.css" />
	<link rel="stylesheet" href="{{url('css')}}/datepicker.css" />
    <style type="text/css">
    html{
    position: relative;
    min-height: 100%;
    }
    body{
        margin-bottom: 70px;
    }
   /* #footer{
        position: absolute;
        bottom: 0px;
        width: 100%;
        background-color: #f5f5f5;
        font-size: 0.9em;
        height: 50px;
        text-align: center;
        
    }*/
    .table-bottom{
        height: 40px;
        padding: 10px 0px;
        border-top: 1px solid #000;
        border-bottom: 1px solid #000; 
    }
    .bottom-nav{
        margin-top: 20px;
    }

    h2{
        border-bottom: 1px solid #000;
    }

    .box-button{
        display: inline-block;
    }
    .table-nav, .tombol-nav{
        display: block;
        clear: both;
        float: left;
        width: 100%;
    }
    .tombol-nav{
        margin-bottom: 10px;
    }
    .table-nav{

        border-top: 1px solid #000;
        border-bottom: 1px solid #000;
    }
    .jumlah-data, .paging{
        width: 50%;
        height: 50px;
        display: block;
    }
    .jumlah-data{
        float: left;
        padding-top: 15px;
    }
    .paging {
        float: right;
        text-align: right;
        padding-right: 30px;
    }
    .paging ul.pager, .paging ul.pagination{
        text-align: right;
    }
    ul.pagination, ul.pager {
        margin-top: 8px;
    }
    #pencarian{
        border-bottom:1px solid#000;
        padding-bottom: 10px;
    }
</style>
    <!--END GLOBAL STYLES -->
</head>
<body class="padTop53">
	<div id="wrap" style="min-height: 650px !important;">
		<!-- HEADER SECTION -->
		 <div id="top">
            <nav class="navbar navbar-inverse navbar-fixed-top " style="padding-top: 10px;">
                <a data-original-title="Show/Hide Menu" data-placement="bottom" data-tooltip="tooltip" class="accordion-toggle btn btn-primary btn-sm visible-xs" data-toggle="collapse" href="#menu" id="menu-toggle">
                    <i class="icon-align-justify"></i>
                </a>
                <!-- LOGO SECTION -->
                <header class="navbar-header">

                    <a href="#" class="navbar-brand">
                    <img src="{{URL('/images/logos.jpg')}}" alt="" height="60px;" width="220px" /></a>
                </header>
                <!-- END LOGO SECTION -->
                <br>
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                       <!-- <li><a href="{{ url('/register') }}">Register</a></li>-->
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><img src="{{ Auth::user()->avatar }}" alt="" class="img-circle">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="button">
                                <li><a href="{{ url('/logout') }}">Logout <span class="glyphicon glyphicon-log-in" aria-hidden="true"></span></a></li>
                            </ul>
                        </li>
                    @endif
                </ul>

            </nav>
        </div>
        <!-- END HEADER SECTION -->
		
		 <!-- MENU SECTION 
         <li><a href="?menu=laborat"><i class="icon-paper-clip"></i> Laboratorium</a></li>
                <li><a href="?menu=tindakan"><i class="icon-paper-clip"></i> Tindakan</a></li>
                <li><a href="?menu=obat"><i class="icon-paper-clip"></i> Obat-obatan</a></li>
                <li><a href="?menu=kunjungan"><i class="icon-paper-clip"></i> Kunjungan</a></li>-->
         <br>
         <br>
		@include('nav')
        
        
       @yield('content')

	</div>
	<!-- FOOTER -->
    @yield('footer')

	<script src="{{url('js')}}/jquery-2.0.3.min.js"></script>
    <script src="{{url('js')}}/bootstrap-datepicker.js"></script>
    <script src="{{url('js')}}/bootstrap.min.js"></script>
    <script src="{{url('js')}}/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <!--END FOOTER -->
     <!-- GLOBAL SCRIPTS -->
    
    <!-- END GLOBAL SCRIPTS -->
</body>

</html>