@extends('template')

@section('main')
	<div id="hobi">
		<h3>Hobi</h3>

		{!! Form::open(['url' => 'hobi' ]) !!}
		@include('hobi.form', ['submitButtonText' => 'Tambah Hobi'])
		{!! Form::close() !!}
	</div>

@stop

@section('footer')

@stop