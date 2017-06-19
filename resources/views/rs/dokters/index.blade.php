<?php 
    $layouts = 'layouts.template';
    if(Auth::check()){
    $layouts = 'admin';
    }
    $title = 'Jadwal Dokter';
    $content = 'Di Rumah Sakit Kartika Husada';
?>

@extends($layouts)

@section('main')
    <div data-example-id="contextual-table" class="bs-example">
        <table class="table">
          <thead>
            <tr>
                  <th>No</th>
                  <th>Nama dokter</th>
                  <th>Spesialis</th>
                  <th>Hari </th>
                  <th>Jam </th>
            </tr>
          </thead>
          <tbody>
          <?php $i = 1;  ?>
          @foreach( $dokters_list as $dokters)
            <tr class="active">
                
                <th scope="row">{{$i++}}</th>
                <td>{{ $dokters->nama_dokter }}</td>   
                <td>{{ $dokters->spesialis}}</td>
                <td>{{ $dokters->nama_hari}}</td>
                <td>{{ $dokters->jam}}</td>
                
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
@stop

@section('content')
	
	 <div id="content">
            <div class="inner" style="min-height: 600px !important;">
                <div class="row" >
                    <div class="col-lg-10">
                        <h3>Data Dokter</h3>
                        <hr/>
                        @include('_partial.flash_message')
                    </div>
                    
                </div>
                 <!--BLOCK SECTION -->
               <div class="tombol-nav" style="float:left;">
                        <a href="dokters/create" class="btn btn-primary"><i class='icon icon-white icon-plus'></i>Tambah Dokter</a> 
                        <a href="{{ url('laporan-dokter') }}" class="btn btn-primary"><i class='icon icon-white icon-plus'></i>Laporan Dokter</a> 
                    </div>     
                    <br>
                    <br>
            <div class="row">
                <div class="col-lg-12">
                        @if (!empty($dokters_list))
                    <br>
                    
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Kode Dokter</th>
                            <th>Nama dokter</th>
                            <th>Alamat</th>
                            <th>No Telp</th>
                            <th>Spesialis</th>
                            <th>Poli</th>
                            <th>Hari</th>
                            <th>Jam</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tboby>
                    @foreach ($dokters_list as $dokters)
                        <tr>
                            <td>{{ $dokters->kd_dokter }}</td>
                            <td>{{ $dokters->nama_dokter }}</td>
                            <td>{{ $dokters->alamat }}</td>
                            <td>{{ $dokters->no_telp }}</td>   
                            <td>{{ $dokters->spesialis }}</td>
                            <td>{{ $dokters->nama_poli }}</td>
                            <td>{{ $dokters->nama_hari }}</td>
                            <td>{{ $dokters->jam }}</td>
                            <td>
                            <div class="box-button">
                                {{ link_to('dokters/' . $dokters->id, 'Detail' ,['class'=> 'btn btn-success btn-sm']) }}
                            </div>
                            <div class="box-button">
                                {{ link_to('dokters/' . $dokters->id . '/edit', 'Edit', ['class' => 'btn btn-warning btn-sm'])}}
                            </div>
                            <div class="box-button">
                                {!! Form::open(['method' => 'DELETE', 'action' => ['DoktersController@destroy', $dokters->id ]]) !!}
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
                <strong>Jumlah Dokters : {{ $jumlah_dokters}}</strong>
            </div>
            <div class="paging">
            {{ $dokters_list->links() }}
            </div>
        </div>
    </div>
</div>

@stop

@section('footer')
	@include('footer')
@stop