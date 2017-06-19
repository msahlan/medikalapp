
		@if ( $errors->any())
		<div class="form-group {{ $errors->has('nama_poli')? 'has-error' : 'has-success'}}">
		@else
		<div class="form-group">
		@endif
			{!! Form::label('nama_poli','Nama poli:',['class'=>'control-label']) !!}
			{!! Form::text('nama_poli',null ,['class'=>'form-control']) !!}
			@if ( $errors->has('nama_poli'))
			<span class="help-block">
				{{ $errors->first('nama_poli')}}
			</span>
			@endif
		</div>		
		<div class="form-group">
			{!! Form::submit($submitButtonText,['class'=>'btn btn-primary form-control']) !!}
		</div>
		
