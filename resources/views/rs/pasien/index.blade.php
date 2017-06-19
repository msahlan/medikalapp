@extends('admin')

@section('content')
	
	 <div id="content">
            <div class="inner" style="min-height: 600px !important;">
                <div class="row" >
                    <div class="col-lg-10">
                        <h3>Data Pasien</h3>
                        <hr/>
                        @include('_partial.flash_message')
                    </div>
                    
                </div>
                 <!--BLOCK SECTION -->
               <div class="tombol-nav" style="float:left;">
                        <a href="pasien/create" class="btn btn-primary"><i class='icon icon-white icon-plus'></i>Tambah pasien</a>
                        <a href="{{ url('laporan-pasien') }}" class="btn btn-primary"><i class='icon icon-white icon-plus'></i>Laporan Pasien</a>  
                        
                    </div>     
                    <br>
                    <br>
            <div class="row">
                <div class="col-lg-12">
                        @if (!empty($pasien_list))
                    <br>
                    
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>No MR</th>
                            <th>Nama Pasien</th>
                            <th>JK</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Umur</th>
                            <th>Alamat</th>
                            <th>No Telepon</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tboby>
                    @foreach ($pasien_list as $pasien)
                        <tr>
                            <td>{{ $pasien->no_mr }}</td>
                            <td>{{ $pasien->nama_pasien }}</td>
                            <td>{{ $pasien->jenis_kelamin }}</td>
                            <td>{{ $pasien->tempat_lahir}}</td> 
                            <td>{{ $pasien->tanggal_lahir }}</td>
                            <td>{{ $pasien->umur }}</td>
                            <td>{{ $pasien->alamat}}</td>
                            <td>{{ $pasien->no_telp }}</td>                
                            
                            <td>
                            <div class="box-button">
                                {{ link_to('pasien/' . $pasien->id, 'Detail' ,['class'=> 'btn btn-success btn-sm']) }}
                            </div>
                            <div class="box-button">
                                {{ link_to('pasien/' . $pasien->id . '/edit', 'Edit', ['class' => 'btn btn-warning btn-sm'])}}
                            </div>
                            <div class="box-button">
                                {!! Form::open(['method' => 'DELETE', 'action' => ['PasienController@destroy', $pasien->id ]]) !!}
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
                <strong>Jumlah pasien : {{ $jumlah_pasien}}</strong>
            </div>
            <div class="paging">
            {{ $pasien_list->links() }}
            </div>
        </div>
    </div>
</div>
        

@stop

@section('footer')
	@include('footer')
@stop