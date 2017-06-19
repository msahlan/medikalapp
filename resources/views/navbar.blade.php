<nav class="navbar navbar-default">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
			data-target="#bs-example-navbar-collapse-1"
			aria-expanded="false">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
				
			</button>
			<a class="navbar-brand" href="{{url('/')}}">Laravelapp</a>
			</div>
			<div class="collapse navbar-collapse"
			id="bs-example-navbar-colapse-1">
			@if(Auth::check())
			<ul class="nav navbar-nav">
				@if(!empty($halaman) && $halaman == 'siswa')
				<li class="active"><a href="{{ url('siswa')}}">Siswa
				<span class="sr-only">(current)</span></a></li>
				@else
				<li><a href="{{ url('siswa')}}">Siswa</a></li>
				@endif

				@if(! empty($halaman) && $halaman == 'kelas')
					<li class="active"><a href="{{ url('kelas') }}">Kelas 
					<span class="sc-only">(current)</span></a></li>
				@else
					<li><a href="{{ url('kelas') }}">Kelas</a></li>
				@endif

				@if(! empty($halaman) && $halaman == 'hobi')
					<li class="active"><a href="{{ url('hobi') }}">Hobi 
					<span class="sc-only"></span></a></li>
				@else
					<li><a href="{{ url('hobi') }}">Hobi</a></li>
				@endif

				@if(!empty($halaman) && $halaman == 'about')
				<li class="active"><a href="{{ url('about')}}">About
				<span class="sr-only">(current)</span></a></li></a></li>
				@else
				<li><a href="{{ url('about')}}">About</a></li>
				@endif

				@if(!empty($halaman) && $halaman == 'user')
				<li class="active"><a href="{{ url('user')}}">User
				<span class="sr-only">(current)</span></a></li></a></li>
				@else
				<li><a href="{{ url('user')}}">User</a></li>
				@endif
			</ul>
			@endif
			<ul class="nav navbar-nav navbar-right">
				@if (Auth::check())
				<li><a href="{{ url('logout') }}">{{ Auth::user()->name }}</a></li>
				@else
				<li><a href="{{ url('login')}}">Login</a></li>
				@endif
				<li class="dropdown"></li>
			</ul>
		</div>
	</div>
</nav>