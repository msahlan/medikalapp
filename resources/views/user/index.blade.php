@extends('admin')

@section('content')
	
	 <div id="content">
            <div class="inner" style="min-height: 600px !important;">
                <div class="row" >
                    <div class="col-lg-10">
                        <h3>User</h3>
                        <hr/>
                        @include('_partial.flash_message')
                    </div>
                    
                </div>
                 <!--BLOCK SECTION -->
               <div class="tombol-nav" style="float:left;">
                        <a href="user/create" class="btn btn-primary"><i class='icon icon-white icon-plus'></i>Tambah User</a> 
                    </div>     
                    <br>
                    <br>
            <div class="row">
                <div class="col-lg-12">
                        @if (!empty($user_list))
                    <br>
                    
        <table class="table table-striped table-bordered table-hover">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama</th>
					<th>Email</th>
					<th>Level</th>
					<th>Action</th>
				</tr>
			</thead>
			<tboby>
			<?php $i = 1; ?>
			@foreach ($user_list as $user)
				<tr>
					<td>{{ $i++ }}</td>
					<td>{{ $user->name }}</td>
					<td>{{ $user->email}}</td>
					<td>{{ $user->level }}</td>
					<td>
					<div class="box-button">
						{{ link_to('user/' . $user->id, 'Detail' ,['class'=> 'btn btn-success btn-sm']) }}
					</div>
					<div class="box-button">
						{{ link_to('user/' . $user->id . '/edit', 'Edit', ['class' => 'btn btn-warning btn-sm'])}}
					</div>
					<div class="box-button">
						{!! Form::open(['method' => 'DELETE', 'action' => ['UserController@destroy', $user->id ]]) !!}
						{!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm'])!!}
						{!! Form::close() !!}
					</div>
					</td>
				</tr>
			@endforeach
			</tboby>
		</table>
            @else
        <p>Data Kosong</p>
        @endif
        </div>
    </div>

        
    </div>
</div>

@stop

@section('footer')
	@include('footer')
@stop