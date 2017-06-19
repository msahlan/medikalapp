@extends('admin')

@section('content')
	
	 <div id="content">
            <div class="inner" style="min-height: 550px !important;">
                <div class="row">
                    <div class="col-lg-12">
                        <h3>Edit ruangan</h3>
                    </div>
                </div>
                <hr/>
                 <!--BLOCK SECTION -->
                 <div class="row">
                    <div class="col-lg-8">
                    {!! Form::model($ruangan, ['method' => 'PATCH', 'action' => ['RuanganController@update', $ruangan->id ]]) !!}	
					@include('rs.ruangan.form',['submitButtonText' => 'Update Kamar'])
					{!! Form::close() !!}
                    </div>
                </div>
                  <!--END BLOCK SECTION -->
                <hr />
            </div>
        </div>

@stop

@section('footer')
	@include('footer')
@stop