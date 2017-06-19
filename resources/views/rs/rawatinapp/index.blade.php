<?php 
    $layouts = 'layouts.template';
    if(Auth::check()){
    $layouts = 'admin';
    }
    $title = 'Ruang Rawat Inap';
    $content = 'Di Rumah Sakit Kartika Husada';
?>

@extends($layouts)

@section('main')

        
    
    <!-- <div data-example-id="contextual-table" class="bs-example">
        <table class="table">
          <thead>
            <tr>
                  <th>No</th>
                  <th>Nama Kelas</th>
                  <th>Total Kamar</th>
                  <th>Kamar Tersedia</th>
                  <th>Kamar Terisi </th>
                  
            </tr>
          </thead>
          <tbody>
            <tr class="active">
                <th scope="row">1</th>
                <th>VIP</th>
                <th>12</th>
                <th style="background-color: rgba(38, 184, 243, 0.31);">8</th>
                <th>4</th>                
            </tr>
          </tbody>
        </table>
      </div> -->
@stop


@section('content')
	
	 <div id="content">
            <div class="inner" style="min-height: 600px !important;">
                <div class="row" >
                    <div class="col-lg-10">
                        <h3>rawatinap</h3>
                        <hr/>
                        @include('_partial.flash_message')
                    </div>
                    
                </div>
                 <!--BLOCK SECTION -->
               <div class="tombol-nav" style="float:left;">
                        <a href="rawatinap/create" class="btn btn-primary"><i class='icon icon-white icon-plus'></i>Tambah rawatinap</a> 
                    </div>     
                    <br>
                    <br>
            <div class="row">
                <div class="col-lg-12">
                        @if (!empty($rawatinap_list))
                    <br>
                    
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>No MR</th>
                            <th>Tanggal Masuk</th>
                            <th>Nama Kamar</th>
                            <th>Kelas</th>
                            <th>Nama Pasien</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tboby>
                    <?php $i=0; ?>
                    @foreach ($rawatinap_list as $rawatinap)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $rawatinap->no_trans }}</td>
                            <td>{{ $rawatinap->tanggal_masuk }}</td>
                            <td>{{ $rawatinap->kamar->nama_kamar }}</td>
                            <td>{{ $rawatinap->kamar->kelaskamar }}</td>
                            <td>{{ $rawatinap->pasien->nama_pasien }}</td>
                                           
                            
                            <td>
                            <div class="box-button">
                                {{ link_to('rawatinap/' . $rawatinap->id, 'Detail' ,['class'=> 'btn btn-success btn-sm']) }}
                            </div>
                            <div class="box-button">
                                {{ link_to('rawatinap/' . $rawatinap->id . '/edit', 'Edit', ['class' => 'btn btn-warning btn-sm'])}}
                            </div>
                            <div class="box-button">
                                {!! Form::open(['method' => 'DELETE', 'action' => ['RawatInapController@destroy', $rawatinap->id ]]) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm'])!!}
                                {!! Form::close() !!}
                            </div>
                            <div class="box-button">
                                {{ link_to('rawatinap/' . $rawatinap->id . '/edit', 'Bayar', ['class' => 'btn btn-primary btn-sm'])}}
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
                <strong>Jumlah rawatinap : {{ $jumlah_rawatinap}}</strong>
            </div>
            <div class="paging">
            {{ $rawatinap_list->links() }}
            </div>
        </div>
    </div>
</div>
        

@stop

@section('footer')
	@include('footer')
@stop