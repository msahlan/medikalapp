		
		@if ($errors->any())
		<div class="form-group {{ $errors->has('kd_kamar') ?
		'has-error' : 'has-success' }}">
			@else
			<div class="form-group">
		@endif
			{!! Form::label('kd_kamar','Kode Kamar:',['class'=>'control-label']) !!}
			{!! Form::text('kd_kamar',null ,['class'=>'form-control']) !!}
			@if($errors->has('kd_kamar'))
			<span class="help-block">
                {{ $errors->first('kd_kamar') }}
            </span>
            @endif
		</div>

		@if ( $errors->any())
		<div class="form-group {{ $errors->has('nama_kamar')? 'has-error' : 'has-success'}}">
		@else
		<div class="form-group">
		@endif
			{!! Form::label('nama_kamar','Nama Kamar:',['class'=>'control-label']) !!}
			{!! Form::text('nama_kamar',null ,['class'=>'form-control']) !!}
			@if ( $errors->has('nama_kamar'))
			<span class="help-block">
				{{ $errors->first('nama_kamar')}}
			</span>
			@endif
		</div>

		@if ($errors->any())
		<div class="form-group {{ $errors->has('id_kelaskamar') ?
		'has-error' : 'has-success' }}">
			@else
			<div class="form-group">
		@endif
			{!! Form::label('id_kelaskamar', 'Kelas :',['class'=> 'contro-label']) !!}
			@if (count($list_kelaskamar) > 0)
			{!! Form::select('id_kelaskamar', $list_kelaskamar, null, ['class'=> 'form-control' , 'id'=> 'id_kelaskamar',
			'placeholder' => 'Pilih Kelas']) !!}
			@else
			<p>Tidak ada pilihan kelaskamar, Buat terlebih dahulu...</p>
			@endif
		@if($errors->has('id_kelaskamar'))
			<span class="help-block">
				{{ $errors->first('id_kelaskamar')}}
			</span>
			@endif
		</div>


		@if ($errors->any())
		<div class="form-group {{ $errors->has('fasilitas')
		 ? 'has-error' : 'has-success' }}">
		@else
		<div class="form-group">
		@endif
			{!! Form::label('fasilitas', 'Fasilitas :' ,['class'=> 'control-label']) !!}
			{!! Form::text('fasilitas',null, ['class' => 'form-control']) !!}
		@if($errors->has('fasilitas'))
			<span class="help-block">
				{{ $errors->first('fasilitas')}}
			</span>
			@endif
		</div>

		@if ($errors->any())
		<div class="form-group {{ $errors->has('harga')
		 ? 'has-error' : 'has-success' }}">
		@else
		<div class="form-group">
		@endif
			{!! Form::label('harga', 'harga :' ,['class'=> 'control-label']) !!}
			{!! Form::text('harga',null, ['class' => 'form-control']) !!}
		@if($errors->has('harga'))
			<span class="help-block">
				{{ $errors->first('harga')}}
			</span>
			@endif
		</div>

		@if ($errors->any())
		<div class="form-group {{ $errors->has('foto') ? 'has-error' : 'has-success' }}">
		@else
		<div class="form-group">
		@endif
		{!! Form::label('foto' , 'Foto') !!}
		{!! Form::file('foto') !!}
			@if ($errors->has('foto'))
			<span class="help-block">
				{{ $errors->first('foto') }}
			</span>
			@endif
		</div>

		<div class="form-group">
			{!! Form::submit($submitButtonText,['class'=>'btn btn-primary form-control']) !!}
		</div>
		
