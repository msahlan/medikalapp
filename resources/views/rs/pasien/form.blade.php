		
		@if ($errors->any())
		<div class="form-group {{ $errors->has('no_mr') ?
		'has-error' : 'has-success' }}">
			@else
			<div class="form-group">
		@endif
			{!! Form::label('no_mr','No Mr:',['class'=>'control-label']) !!}
			{!! Form::text('no_mr',null ,['class'=>'form-control']) !!}
			@if($errors->has('no_mr'))
			<span class="help-block">
                {{ $errors->first('no_mr') }}
            </span>
            @endif
		</div>
		@if ( $errors->any())
		<div class="form-group {{ $errors->has('nama_pasien')? 'has-error' : 'has-success'}}">
		@else
		<div class="form-group">
		@endif
			{!! Form::label('nama_pasien','Nama Pasien:',['class'=>'control-label']) !!}
			{!! Form::text('nama_pasien',null ,['class'=>'form-control']) !!}
			@if ( $errors->has('nama_pasien'))
			<span class="help-block">
				{{ $errors->first('nama_pasien')}}
			</span>
			@endif
		</div>
		<div class="form-group">
			{!! Form::label('jenis_kelamin','Jenis Kelamin:',['class'=>'control-label']) !!}
			<div class="radio">
			<label>{!! Form::radio('jenis_kelamin','L') !!} Laki-laki</label>
			</div>
			<div class="radio">
			<label >{!! Form::radio('jenis_kelamin','P') !!} Perempuan</label>
			</div>
		</div>

		@if ( $errors->any())
		<div class="form-group {{ $errors->has('tempat_lahir')? 'has-error' : 'has-success'}}">
		@else
		<div class="form-group">
		@endif
			{!! Form::label('tempat_lahir','Tempat Lahir:',['class'=>'control-label']) !!}
			{!! Form::text('tempat_lahir',null ,['class'=>'form-control']) !!}
			@if ( $errors->has('tempat_lahir'))
			<span class="help-block">
				{{ $errors->first('tempat_lahir')}}
			</span>
			@endif
		</div>


		@if ( $errors->any())
		<div class="form-group {{ $errors->has('tanggal_lahir')? 'has-error' : 'has-success' }}">
		@else
		<div class="form-group">
		@endif
			{!! Form::label('tanggal_lahir','Tanggal Lahir:',['class'=>'control-label']) !!}
			{!! Form::date('tanggal_lahir', null ,['class'=>'form-control', 'id'=>'tanggal_lahir']) !!}
			@if ( $errors->has('tanggal_lahir'))
				<span class="help-block">
					{{ $errors->first('tanggal_lahir') }}
				</span>
			@endif
		</div>

		@if ( $errors->any())
		<div class="form-group {{ $errors->has('umur')? 'has-error' : 'has-success'}}">
		@else
		<div class="form-group">
		@endif
			{!! Form::label('umur','Umur:',['class'=>'control-label']) !!}
			{!! Form::text('umur',null ,['class'=>'form-control']) !!}
			@if ( $errors->has('umur'))
			<span class="help-block">
				{{ $errors->first('umur')}}
			</span>
			@endif
		</div>
		
		@if ( $errors->any())
		<div class="form-group {{ $errors->has('no_telp')? 'has-error' : 'has-success'}}">
		@else
		<div class="form-group">
		@endif
			{!! Form::label('no_telp','Nomor Telepon:',['class'=>'control-label']) !!}
			{!! Form::text('no_telp',null ,['class'=>'form-control']) !!}
			@if ( $errors->has('no_telp'))
			<span class="help-block">
				{{ $errors->first('no_telp')}}
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
		
