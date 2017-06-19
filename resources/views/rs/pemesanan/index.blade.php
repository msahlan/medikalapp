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

        <h4>Kamar Melati</h4>    
        @if ($errors->any())
        <div class="form-group {{ $errors->has('kd_kamar') ?
        'has-error' : 'has-success' }}">
            @else
            <div class="form-group">
        @endif
            {!! Form::label('kd_kamar','Kode MR:',['class'=>'control-label']) !!}
            {!! Form::text('kd_kamar',null ,['class'=>'form-control']) !!}
            @if($errors->has('kd_kamar'))
            <span class="help-block">
                {{ $errors->first('kd_kamar') }}
            </span>
            @endif
        </div>
        

        @if ( $errors->any())
        <div class="form-group {{ $errors->has('nama_kamar')? 'has-error' : 'has-success'}}">
        @else
        <div class="form-group">
        @endif
            {!! Form::label('nama_kamar','Nama Pasien:',['class'=>'control-label']) !!}
            {!! Form::text('nama_kamar',null ,['class'=>'form-control']) !!}
            @if ( $errors->has('nama_kamar'))
            <span class="help-block">
                {{ $errors->first('nama_kamar')}}
            </span>
            @endif
        </div>

        


        @if ($errors->any())
        <div class="form-group {{ $errors->has('fasilitas')
         ? 'has-error' : 'has-success' }}">
        @else
        <div class="form-group">
        @endif
            {!! Form::label('fasilitas', 'Alamat :' ,['class'=> 'control-label']) !!}
            {!! Form::text('fasilitas',null, ['class' => 'form-control']) !!}
        @if($errors->has('fasilitas'))
            <span class="help-block">
                {{ $errors->first('fasilitas')}}
            </span>
            @endif
        </div>

        @if ($errors->any())
        <div class="form-group {{ $errors->has('harga')
         ? 'has-error' : 'has-success' }}">
        @else
        <div class="form-group">
        @endif
            {!! Form::label('harga', 'Tanggal Reservasi :' ,['class'=> 'control-label']) !!}
            {!! Form::text('harga',null, ['class' => 'form-control']) !!}
        @if($errors->has('harga'))
            <span class="help-block">
                {{ $errors->first('harga')}}
            </span>
            @endif
        </div>

        @if ($errors->any())
        <div class="form-group {{ $errors->has('harga')
         ? 'has-error' : 'has-success' }}">
        @else
        <div class="form-group">
        @endif
            {!! Form::label('harga', 'Keterangan :' ,['class'=> 'control-label']) !!}
            {!! Form::text('harga',null, ['class' => 'form-control']) !!}
        @if($errors->has('harga'))
            <span class="help-block">
                {{ $errors->first('harga')}}
            </span>
            @endif
        </div>

        

        <div class="form-group">
            {!! Form::submit('Pesan',['class'=>'btn btn-primary form-control']) !!}
        </div>
        

@stop


@section('content')
	
	 <div id="content">
            <div class="inner" style="min-height: 600px !important;">
                <div class="row" >
                    <div class="col-lg-10">
                        <h3>Pemesanan</h3>
                        <hr/>
                        @include('_partial.flash_message')
                    </div>
                    
                </div>
                 <!--BLOCK SECTION -->
               <div class="tombol-nav" style="float:left;">
                        <a href="pemesanan/create" class="btn btn-primary"><i class='icon icon-white icon-plus'></i>Tambah pemesanan</a>
                        <a href="{{ url('laporan-pemesanan') }}" class="btn btn-primary"><i class='icon icon-white icon-plus'></i>Laporan Pemesanan</a> 
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