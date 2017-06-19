@extends('template')

@section('main')
	<div id="kelas">
		<h3>Edit Kelas</h3>

		{!! Form::model($kelas, ['method' => 'PATCH', 'action' => ['KelasController@update', $kelas->id]]) !!}
		@include('kelas.form',['submitButtonText' => 'Update Kelas'])
		{!! Form::close() !!}
	</div>
@stop

@section('footer')
	@include('footer')
@stop