@extends('admin')

@section('main')

<div class="col-md-8">
<div id="siswa">
	<h2>Tambah User</h2>
	
	{!! Form::open(['url'=>'user' , 'files' => 'true']) !!}
		@include('user.form',['submitButtonText' => 'Tambah User'])
	{!! Form::close() !!}
	</div>
</div>
@stop
@section('footer')
	@include('footer')
@stop