		
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
		<div class="form-group {{ $errors->has('kelaskamar') ?
		'has-error' : 'has-success' }}">
			@else
			<div class="form-group">
		@endif
			
          <label>Pilih Kelas <span class="text-danger">*</span>: </label>
                <select name="kelaskamar" data-placeholder="Pilih" class="select required" >
                    <option></option>
                        <option value="Kelas I">Kelas I</option>
                        <option value="Kelas II">Kelas II</option>
                        <option value="Kelas III">Kelas III</option>
                        <option value="VIP">VIP</option>     
                </select>	
		@if($errors->has('kelaskamar'))
			<span class="help-block">
				{{ $errors->first('kelaskamar')}}
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

		<div class="form-group">
			{!! Form::submit($submitButtonText,['class'=>'btn btn-primary form-control']) !!}
		</div>
		
