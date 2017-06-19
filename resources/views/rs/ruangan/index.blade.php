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

<style type="text/css">
    tr{
        display: table-row;
    }
    .slick-slider {
  padding-bottom: 35px;
  margin: 0;
}
.slick-slider .item > * {
  margin: 0;
}
.slick-basic {
  position: relative;
  overflow: hidden;
}
.slick-basic .item {
  margin: 3px;
}
.slick-dots {
  height: 25px;
  bottom: 0;
  margin: 0;
}
.slick-dots li {
  margin: 0;
}
.slick-dots li button:before {
  font-size: 14px;
  color: #e0e0e0;
  opacity: 1;
}
.slick-dots li.slick-active button:before {
  color: #26a69a;
}
.label {
    padding: 5px 10px;
    font-size: 12px;
    line-height: 1.5;
    border-radius: 4px;
    display: inline-block;
}

</style>

<div class="container">
    <h3>Ketersediaan Ruang Rawat Inap</h3>
    <hr>
 
    <div class="col-md-12">
     @foreach ($ruangan_list as $ruangan)
          <div class="col-md-12">
            <div class="item">
              <div class="panel panel-default relative">
                <div class="ribbon-heading" style="text-align: left;"><strong><h4> Kamar {{ $ruangan->nama_kamar}}</h4></strong></div>
                <div class="cover hover overlay margin-none">
                  <img src="{{ asset('fotoupload/'. $ruangan->foto) }}" alt="location" class="img-responsive" style="float: left;padding-left: 10px;" width="180px;" height="150px;" />
                </div>
                <div class="panel-body" style="padding-left: 200px;" >
                  <h4> Kelas : {{ $ruangan->kelaskamar->nama_kelaskamar}}</h4>
                  <h4> Status : Tersedia</h4>
                  <h4> Fasilitas : Kamar Tidur 1, Tv, dan Kamar Mandi </h4>
                  <br>
                  {{ link_to('reservasi/'.$ruangan->id ,'Reservasi',['class'=>'btn btn-success btn-sm']) }}
               </div>
            </div>
          </div>
      </div>
        @endforeach

@stop

@section('content')
	
	 <div id="content">
            <div class="inner" style="min-height: 600px !important;">
                <div class="row" >
                    <div class="col-lg-10">
                        <h3>Pasien</h3>
                        <hr/>
                        @include('_partial.flash_message')
                    </div>
                    
                </div>
                 <!--BLOCK SECTION -->
               <div class="tombol-nav" style="float:left;">
                        <a href="ruangan/create" class="btn btn-primary"><i class='icon icon-white icon-plus'></i>Tambah Ruangan</a> 
                    </div>     
                    <br>
                    <br>
            <div class="row">
                <div class="col-lg-12">
                        @if (!empty($ruangan_list))
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
                    @foreach ($ruangan_list as $ruangan)
                        <tr>
                            <td>{{ $ruangan->kd_kamar }}</td>
                            <td>{{ $ruangan->nama_kamar }}</td>
                            <td>{{ $ruangan->kelaskamar->nama_kelaskamar }}</td>            
                            <td>{{ $ruangan->fasilitas }}</td>                            
                            <td>
                            <div class="box-button">
                                {{ link_to('ruangan/' . $ruangan->id, 'Detail' ,['class'=> 'btn btn-success btn-sm']) }}
                            </div>
                            <div class="box-button">
                                {{ link_to('ruangan/' . $ruangan->id . '/edit', 'Edit', ['class' => 'btn btn-warning btn-sm'])}}
                            </div>
                            <div class="box-button">
                                {!! Form::open(['method' => 'DELETE', 'action' => ['RuanganController@destroy', $ruangan->id ]]) !!}
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
                <strong>Jumlah ruangan : {{ $jumlah_ruangan}}</strong>
            </div>
            <div class="paging">
            {{ $ruangan_list->links() }}
            </div>
        </div>
    </div>
</div>
        

@stop

@section('footer')
	@include('footer')
@stop