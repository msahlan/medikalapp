@extends('admin')

@section('content')
	
	 <div id="content">
            <div class="inner" style="min-height: 600px !important;">
                <div class="row" >
                    <div class="col-lg-10">
                        <h3>Poliklinik</h3>
                        <hr/>
                        @include('_partial.flash_message')
                    </div>
                    
                </div>
                 <!--BLOCK SECTION -->
               <div class="tombol-nav" style="float:left;">
                        <a href="poliklinik/create" class="btn btn-primary"><i class='icon icon-white icon-plus'></i>Tambah Poli</a> 
                    </div>     
                    <br>
                    <br>
            <div class="row">
                <div class="col-lg-12">
                        @if (!empty($poliklinik_list))
                    <br>
                    
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Poli</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tboby>
                    <?php
                            $i = 0;
                            ?>
                    @foreach ($poliklinik_list as $poliklinik)
                        <tr>
                            
                            <td>{{ ++$i}}</td>
                            <td>{{ $poliklinik->nama_poli }}</td>
              
                            
                            <td>
                            <div class="box-button">
                                {{ link_to('poliklinik/' . $poliklinik->id, 'Detail' ,['class'=> 'btn btn-success btn-sm']) }}
                            </div>
                            <div class="box-button">
                                {{ link_to('poliklinik/' . $poliklinik->id . '/edit', 'Edit', ['class' => 'btn btn-warning btn-sm'])}}
                            </div>
                            <div class="box-button">
                                {!! Form::open(['method' => 'DELETE', 'action' => ['PoliController@destroy', $poliklinik->id ]]) !!}
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
                <strong>Jumlah poliklinik : {{ $jumlah_poliklinik}}</strong>
            </div>
            <div class="paging">
            {{ $poliklinik_list->links() }}
            </div>
        </div>
    </div>
</div>

@stop

@section('footer')
	@include('footer')
@stop