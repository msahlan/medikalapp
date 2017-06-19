		
		@if ($errors->any())
		<div class="form-group {{ $errors->has('kd_dokter') ?
		'has-error' : 'has-success' }}">
			@else
			<div class="form-group">
		@endif
			{!! Form::label('kd_dokter','Kode Dokter:',['class'=>'control-label']) !!}
			{!! Form::text('kd_dokter',null ,['class'=>'form-control']) !!}
			@if($errors->has('kd_dokter'))
			<span class="help-block">
                {{ $errors->first('kd_dokter') }}
            </span>
            @endif
		</div>
		@if ( $errors->any())
		<div class="form-group {{ $errors->has('nama_dokter')? 'has-error' : 'has-success'}}">
		@else
		<div class="form-group">
		@endif
			{!! Form::label('nama_dokter','Nama Dokter:',['class'=>'control-label']) !!}
			{!! Form::text('nama_dokter',null ,['class'=>'form-control']) !!}
			@if ( $errors->has('nama_dokter'))
			<span class="help-block">
				{{ $errors->first('nama_dokter')}}
			</span>
			@endif
		</div>

		@if ($errors->any())
		<div class="form-group {{ $errors->has('no_telp')
		 ? 'has-error' : 'has-success' }}">
		@else
		<div class="form-group">
		@endif
			{!! Form::label('no_telp', 'No Telp :' ,['class'=> 'control-label']) !!}
			{!! Form::text('no_telp',null, ['class' => 'form-control']) !!}
		@if($errors->has('no_telp'))
			<span class="help-block">
				{{ $errors->first('no_telp')}}
			</span>
			@endif
		</div>

		@if ($errors->any())
		<div class="form-group {{ $errors->has('spesialis')
		 ? 'has-error' : 'has-success' }}">
		@else
		<div class="form-group">
		@endif
			{!! Form::label('spesialis', 'Spesialis :' ,['class'=> 'control-label']) !!}
			{!! Form::text('spesialis',null, ['class' => 'form-control']) !!}
		@if($errors->has('spesialis'))
			<span class="help-block">
				{{ $errors->first('spesialis')}}
			</span>
			@endif
		</div>

		@if ($errors->any())
		<div class="form-group {{ $errors->has('jadwal_dokter1')
		 ? 'has-error' : 'has-success' }}">
		@else
		<div class="form-group">
		@endif
			{!! Form::label('jadwal_dokter1', 'jadwal_dokter1 :' ,['class'=> 'control-label']) !!}
			{!! Form::text('jadwal_dokter1',null, ['class' => 'form-control']) !!}
		@if($errors->has('jadwal_dokter1'))
			<span class="help-block">
				{{ $errors->first('jadwal_dokter1')}}
			</span>
			@endif
		</div>

		@if ($errors->any())
		<div class="form-group {{ $errors->has('jadwal_dokter2')
		 ? 'has-error' : 'has-success' }}">
		@else
		<div class="form-group">
		@endif
			{!! Form::label('jadwal_dokter2', 'jadwal_dokter2 :' ,['class'=> 'control-label']) !!}
			{!! Form::text('jadwal_dokter2',null, ['class' => 'form-control']) !!}
		@if($errors->has('jadwal_dokter2'))
			<span class="help-block">
				{{ $errors->first('jadwal_dokter2')}}
			</span>
			@endif
		</div>

		@if ($errors->any())
		<div class="form-group {{ $errors->has('alamat')
		 ? 'has-error' : 'has-success' }}">
		@else
		<div class="form-group">
		@endif
			{!! Form::label('alamat', 'Alamat :' ,['class'=> 'control-label']) !!}
			{!! Form::textarea('alamat',null, ['class' => 'form-control']) !!}
		@if($errors->has('alamat'))
			<span class="help-block">
				{{ $errors->first('alamat')}}
			</span>
			@endif
		</div>
		
		
		<div class="form-group">
			{!! Form::submit($submitButtonText,['class'=>'btn btn-primary form-control']) !!}
		</div>
		
