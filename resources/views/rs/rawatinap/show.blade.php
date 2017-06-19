@extends('admin')

@section('content')
	
	 <div id="content">
            <div class="inner" style="min-height: 550px !important;">
                <div class="row">
                    <div class="col-lg-12"> 
						<h3>Detail Pasien</h3>
                    </div>
                </div>
                
                 <!--BLOCK SECTION -->
                 <div class="row">
                    <div class="col-lg-8">
			        <table class="table table-striped">
						<tr>
							<th>No MR</th>
							<td>{{ $pasien->no_mr}}</td>
						</tr>
						<tr>
							<th>Nama</th>
							<td>{{ $pasien->nama_pasien }}</td>
						</tr>
						<tr>
							<th>Jenis Kelamin</th>
							<td>{{ $pasien->jenis_kelamin }}</td>
						</tr>
						<tr>
							<th>Tempat Lahir</th>
							<td>{{ $pasien->tempat_lahir }}</td>
						</tr>
						<tr>
							<th>Tanggal Lahir</th>
							<td>{{ $pasien->tanggal_lahir }}</td>
						</tr>
						<tr>
							<th>Alamat</th>
							<td>{{ $pasien->alamat}}</td>
						</tr>
						
					</table>
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
