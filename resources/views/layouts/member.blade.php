<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>RS.Kartika Husada</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="{{url('assets')}}/fonts/font/fonts/fontawesome-webfont.eot">
    <link rel="stylesheet" href="{{url('assets')}}/fonts/font/lato/Lato-Regular.ttf">

    <!-- Styles <link href="{{ URL::to('themekit')}}/css/app/social.css" rel="stylesheet"> -->
    
    <link rel="stylesheet" href="{{URL('/assets/css/bootstrap.min.css')}}">
     
    <link href="{{ url('/')}}/assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/theme/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/theme/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/theme/css/bootstrap-theme.min.css">

    
    
    <style>
        body {
            font-family: 'Lato';
        background-image: url('../public/images/background.jpg');
        background-size: cover;
         }
       
        .fa-btn {
            margin-right: 6px;
        }
         .circle img{
            width: 40px;
            height: 25px;
            border-radius: 60px;

        }
        a{
            color: white;
        }
    </style>
</head>
<body id="app-layout">

    <nav class="navbar navbar-default navbar-static-top" style="background-color:#36ced2; ">
        <div class="container">
            <div class="navbar-header">
            <a class="navbar-brand" href="#">
            <img class="circle" src="{{URL('/images/logo.jpg')}} " width="45px" height="30px">
            </a>

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                RS. Kartika Husada Tambun
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav" >
                    <li><a href="{{ url('/') }}">Beranda</a></li>
                    <li><a href="{{ URL('dokter')}}">Jadwal</a></li>
                    <li><a href="{{ URL('/check/room')}}"><i class="fa fa-table"></i> Cek Ruangan</a></li> 
                    <li><a href="{{ URL('/fasilitas')}}"> Fasilitas</a></li> 
                    <li><a href="{{ URL('/kontak')}}"> Kontak</a></li> 

                            <!--<ul class="dropdown-menu" role="button">
                                <li><a href="{{ url('/masuk') }}">Rawat Inap</a></li>
                                <li><a href="{{ url('/keluar') }}">Rawat Jalan</a></li>
                            </ul>  --> 
                  <!--  <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                Layanan <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="button"> 
                                <li><a href="{{ url('/data/dokter') }}">Insert Data Dokter</a></li>
                                <li><a href="{{ url('/data/kamar') }}">Insert Data Kamar</a></li>
                                <li><a href="{{ url('/show/room') }}">Show Data Kamar</a></li>
                            </ul>   
                    
                    <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                Kontak <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="button">
                                <li><a href="{{ url('/home') }}">Instansi Pengguna </a></li>
                                <li><a href="{{ url('/home') }}">Management Admin</a></li>
                            </ul> 
                    -->
                </ul>
                </li>
                <!-- Right Side Of Navbar -->
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
            </div>
        </div>
    </nav>

    @yield('main')

    


    <!-- JavaScripts -->
      <script type="text/javascript" src="{{ URL('/assets/js/jquery-2.1.3.min.js')}}"></script>
      <script type="text/javascript" src="{{ URL('/assets/js/bootstrap.min.js')}}"></script>
      <script src="{{ URL::to('themekit')}}/js/vendor/core/breakpoints.js"></script>
      <script src="{{ URL::to('themekit')}}/js/vendor/core/jquery.nicescroll.js"></script>
      <script src="{{ URL::to('themekit')}}/js/vendor/core/jquery.grid-a-licious.js"></script>
      <script src="{{ URL::to('themekit')}}/js/vendor/core/jquery.cookie.js"></script>
      <script src="{{ URL::to('themekit')}}/js/vendor/core/load_image.js"></script>
      <script src="{{ URL::to('themekit')}}/js/vendor/core/jquery.debouncedresize.js"></script>
      <script src="{{ URL::to('themekit')}}/js/vendor/forms/all.js"></script>
      <script src="{{ URL::to('themekit')}}/js/vendor/media/all.js"></script>
      <script src="{{ URL::to('themekit') }}/js/app/essentials.js"></script>
      <script src="{{ URL::to('themekit') }}/js/app/layout.js"></script>
      <script src="{{ URL::to('themekit') }}/js/app/media.js"></script>
      <script src="{{ URL::to('themekit') }}/js/app/main.js"></script>

</body>
</html>
