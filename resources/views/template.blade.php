<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content"IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laravelapp</title>
	<link rel="stylesheet" type="text/css" href="{{asset('bootstrap_3_3_6/css/bootstrap.min.css')}}">
	<script src="{{ asset('http://localhost/aplikasi/public/js/html5shiv_3_7_2.min.js') }}" type="text/javascript" ></script>
	<script src="{{ asset('http://localhost/aplikasi/public/js/respond_1_4_2.min.js') }}" type="text/javascript" ></script>
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
	<script src="{{ asset('js/laravelapp.js')}}"></script>

</head>
	<style type="text/css">
	html{
	position: relative;
	min-height: 100%;
	}
	body{
		margin-bottom: 70px;
	}
	#footer{
		position: absolute;
		bottom: 0px;
		width: 100%;
		background-color: #f5f5f5;
		font-size: 0.9em;
		height: 50px;
		text-align: center;
		padding-top: 20px;
	}
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
		margin-top: 10px;
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
<body>

<div class="container">

	@include('navbar')

	@yield('main')
	@yield('content')

</div>

	@yield('footer')

<script src="{{ asset('js/jquery_2_2_1.min.js')}}" type="text/javascript" ></script>
<script src="{{ asset('bootstrap_3_3_6/js/bootstrap.min.js')}}" type="text/javascript" ></script>
</body>
</html>