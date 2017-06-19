@extends('admin')

@section('content')
	
	 <div id="content">
            <div class="inner" style="min-height: 550px !important;">
                <div class="row">
                    <div class="col-lg-12">
                        <h3>Rawat Inap</h3>
                    </div>
                </div>
                <hr/>
                 <!--BLOCK SECTION -->
                 <div class="row">
                    <div class="col-lg-8">
                    {!! Form::open(['url'=>'rawatinap']) !!}
                    @include('rs.rawatinap.form',['submitButtonText' => 'Tambah Rawat Inap'])
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