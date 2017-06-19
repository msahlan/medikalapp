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
                  <th>Jadwal Dokter </th>
                  <th>Jadwal Dokter </th>
            </tr>
          </thead>
          <tbody>
          <?php $i = 1;  ?>
          @foreach( $dokter_list as $dokter)
            <tr class="active">
                
                <th scope="row">{{$i++}}</th>
                <td>{{ $dokter->nama_dokter }}</td>   
                <td>{{ $dokter->spesialis}}</td>
                <td>{{ $dokter->jadwal_dokter1}}</td>
                <td>{{ $dokter->jadwal_dokter2}}</td>
                
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
                        <h3>Dokter</h3>
                        <hr/>
                        @include('_partial.flash_message')
                    </div>
                    
                </div>
                 <!--BLOCK SECTION -->
               <div class="tombol-nav" style="float:left;">
                        <a href="dokter/create" class="btn btn-primary"><i class='icon icon-white icon-plus'></i>Tambah dokter</a> 
                        
                    </div>
                    <div class="tombol-nav" style="float:right;">
                        
                        <a href="dokter/create" class="btn btn-primary"><i class='icon icon-white icon-plus'></i>Laporan</a> 
                    </div>     
                    <br>
                    <br>
            <div class="row">
                <div class="col-lg-12">
                        @if (!empty($dokter_list))
                    <br>
                    
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Kode Dokter</th>
                            <th>Nama dokter</th>
                            <th>Alamat</th>
                            <th>No Telp</th>
                            <th>Spesialis</th>
                            <th>Jadwal Dokter 1</th>
                            <th>Jadwal Dokter 2</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tboby>
                    @foreach ($dokter_list as $dokter)
                        <tr>
                            <td>{{ $dokter->kd_dokter }}</td>
                            <td>{{ $dokter->nama_dokter }}</td>
                            <td>{{ $dokter->alamat}}</td>
                            <td>{{ $dokter->no_telp}}</td>   
                            <td>{{ $dokter->spesialis}}</td>
                            <td>{{ $dokter->jadwal_dokter1}}</td>
                            <td>{{ $dokter->jadwal_dokter2}}</td>
                            <td>
                            <div class="box-button">
                                {{ link_to('dokter/' . $dokter->id, 'Detail' ,['class'=> 'btn btn-success btn-sm']) }}
                            </div>
                            <div class="box-button">
                                {{ link_to('dokter/' . $dokter->id . '/edit', 'Edit', ['class' => 'btn btn-warning btn-sm'])}}
                            </div>
                            <div class="box-button">
                                {!! Form::open(['method' => 'DELETE', 'action' => ['DokterController@destroy', $dokter->id ]]) !!}
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
                <strong>Jumlah Dokter : {{ $jumlah_dokter}}</strong>
            </div>
            <div class="paging">
            {{ $dokter_list->links() }}
            </div>
        </div>
    </div>
</div>

@stop

@section('footer')
	@include('footer')
@stop