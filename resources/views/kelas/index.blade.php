@extends('template')

@section('main')
	<div id="kelas">
		<h3>Kelas</h3>

		@include('_partial.flash_message')

		@if (count($kelas_list) > 0)
			<table class="table">
				<thead>
					<tr>
						<th>No</th>
						<th>Kelas</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php $i = 0; ?>
					@foreach ($kelas_list as $kelas)
					<tr>
						<td>{{ ++$i }}</td>
						<td>{{ $kelas->nama_kelas }}</td>
						<td>
							<div class="box-button">
								{{ link_to('kelas/' .$kelas->id . '/edit', 'Edit', ['class'=> 'btn btn-warning btn-sm'] )}}
							</div>
							<div class="box-button">
								{!! Form::open(['method' => 'DELETE', 'action' => ['KelasController@destroy', $kelas->id ]]) !!}
								{!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm' ]) !!}
								{!! Form::close() !!}
							</div>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			@else
			<p>Tidak Ada Data</p>
			@endif

		<div class="tombol-nav">
			<a href="{{ url('kelas/create')}}" class="btn btn-primary"> Tambah kelas</a>
		</div>
	</div>
@stop

@section('footer')
	@include('footer')
@stop