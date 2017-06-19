@extends('admin')

@section('content')
	
	 <div id="content">
            <div class="inner" style="min-height: 600px !important;">
                <div class="row" >
                    <div class="col-lg-10">
                        <h3>Kamar</h3>
                        <hr/>
                        @include('_partial.flash_message')
                    </div>
                    
                </div>
                 <!--BLOCK SECTION -->
               <div class="tombol-nav" style="float:left;">
                        <a href="kamar/create" class="btn btn-primary"><i class='icon icon-white icon-plus'></i>Tambah Kamar</a> 
                    </div>     
                    <br>
                    <br>
            <div class="row">
                <div class="col-lg-12">
                        @if (!empty($kamar_list))
                    <br>
                    
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Kode Kamar</th>
                            <th>Nama Kamar</th>
                            <th>Kelas</th>
                            <th>Fasilitas</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tboby>
                    @foreach ($kamar_list as $kamar)
                        <tr>
                            <td>{{ $kamar->kd_kamar }}</td>
                            <td>{{ $kamar->nama_kamar }}</td>
                            <td>{{ $kamar->kelaskamar }}</td>            
                            <td>{{ $kamar->fasilitas }}</td>                            
                            <td>
                            <div class="box-button">
                                {{ link_to('kamar/' . $kamar->id, 'Detail' ,['class'=> 'btn btn-success btn-sm']) }}
                            </div>
                            <div class="box-button">
                                {{ link_to('kamar/' . $kamar->id . '/edit', 'Edit', ['class' => 'btn btn-warning btn-sm'])}}
                            </div>
                            <div class="box-button">
                                {!! Form::open(['method' => 'DELETE', 'action' => ['KamarController@destroy', $kamar->id ]]) !!}
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

        <div class="table-nav">
            <div class="jumlah-data">
                <strong>Jumlah kamar : {{ $jumlah_kamar}}</strong>
            </div>
            <div class="paging">
            {{ $kamar_list->links() }}
            </div>
        </div>
    </div>
</div>
        

@stop

@section('footer')
	@include('footer')
@stop