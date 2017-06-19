		
		@if ($errors->any())
		<div class="form-group {{ $errors->has('no_trans') ?
		'has-error' : 'has-success' }}">
			@else
			<div class="form-group">
		@endif
			{!! Form::label('no_trans','No Mr:',['class'=>'control-label']) !!}
			{!! Form::text('no_trans',null ,['class'=>'form-control']) !!}
			@if($errors->has('no_trans'))
			<span class="help-block">
                {{ $errors->first('no_trans') }}
            </span>
            @endif
		</div>

		@if ($errors->any())
		<div class="form-group {{ $errors->has('id_kamar') ?
		'has-error' : 'has-success' }}">
			@else
			<div class="form-group">
		@endif
			{!! Form::label('id_kamar', 'kamar :',['class'=> 'contro-label']) !!}
			@if (count($list_kamar) > 0)
			{!! Form::select('id_kamar', $list_kamar, null, ['class'=> 'form-control' , 'id'=> 'id_kamar',
			'placeholder' => 'Pilih kamar']) !!}
			@else
			<p>Tidak ada pilihan kamar, Buat terlebih dahulu...</p>
			@endif
		@if($errors->has('id_kamar'))
			<span class="help-block">
				{{ $errors->first('id_kamar')}}
			</span>
			@endif
		</div>
		@if ($errors->any())
		<div class="form-group {{ $errors->has('id_pasien') ?
		'has-error' : 'has-success' }}">
			@else
			<div class="form-group">
		@endif
			{!! Form::label('id_pasien', 'pasien :',['class'=> 'contro-label']) !!}
			@if (count($list_pasien) > 0)
			{!! Form::select('id_pasien', $list_pasien, null, ['class'=> 'form-control' , 'id'=> 'id_pasien',
			'placeholder' => 'Pilih pasien']) !!}
			@else
			<p>Tidak ada pilihan pasien, Buat terlebih dahulu...</p>
			@endif
		@if($errors->has('id_pasien'))
			<span class="help-block">
				{{ $errors->first('id_pasien')}}
			</span>
			@endif
		</div>

		@if ( $errors->any())
		<div class="form-group {{ $errors->has('tanggal_masuk')? 'has-error' : 'has-success' }}">
		@else
		<div class="form-group">
		@endif
			{!! Form::label('tanggal_masuk','Tanggal Masuk:',['class'=>'control-label']) !!}
			{!! Form::date('tanggal_masuk', null ,['class'=>'form-control', 'id'=>'tanggal_masuk']) !!}
			@if ( $errors->has('tanggal_masuk'))
				<span class="help-block">
					{{ $errors->first('tanggal_masuk') }}
				</span>
			@endif
		</div>
		
		<div class="form-group">
			{!! Form::submit($submitButtonText,['class'=>'btn btn-primary form-control']) !!}
		</div>

		
