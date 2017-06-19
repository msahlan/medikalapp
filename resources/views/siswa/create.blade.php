@extends('template')

@section('main')

<div class="col-md-8">
<div id="siswa">
	<h2>Tambah Siswa</h2>
	
	{!! Form::open(['url'=>'siswa' , 'files' => 'true']) !!}
		@include('siswa.form',['submitButtonText' => 'Tambah Siswa'])
	{!! Form::close() !!}
	</div>
</div>
@stop
@section('footer')
	@include('footer')
@stop