@extends('layouts.print')

@section('content')

                <h4 style="font-size: 18px;">Laporan Pasien</h4>

		<table class="table table-bordered " style="width:100%">
			<thead>
				<tr style="min-height:22px;height:22px;">
					
					<th>No MR</th>
                            <th>Nama Pasien</th>
                            <th>JK</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Umur</th>
                            <th>Alamat</th>
                            <th>No Telepon</th>
                    
				</tr>
			</thead>
			<tbody>
				@foreach ($pasien as $key => $pasien)
				<tr style="min-height:22px;height:22px;">
				
					 <td>{{ $pasien->no_mr }}</td>
                            <td>{{ $pasien->nama_pasien }}</td>
                            <td>{{ $pasien->jenis_kelamin }}</td>
                            <td>{{ $pasien->tempat_lahir}}</td> 
                            <td>{{ $pasien->tanggal_lahir }}</td>
                            <td>{{ $pasien->umur }}</td>
                            <td>{{ $pasien->alamat}}</td>
                            <td>{{ $pasien->no_telp }}</td> 
                    
				</tr>
				@endforeach
			</tbody>
		</table>


@stop                
       