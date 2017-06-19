@extends('template')

@section('main')
	<div id="kelas">
		<h3>Tambah Kelas</h3>
		{!! Form::open(['url' => 'kelas' ]) !!}
		@include('kelas.form', ['submitButtonText' => 'Tambah Kelas'])
		{!! Form::close() !!}
	</div>
@stop

@section('footer')
	@include('footer')
@stop