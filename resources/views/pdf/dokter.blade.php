@extends('layouts.print')

@section('content')

                <h3>Laporan Dokter</h3>

		<table class="table table-bordered " style="width:100%">
			<thead>
				<tr style="min-height:22px;height:22px;">
					
					<th style="border-bottom: 1px; border-collapse: 1px;">Kode Dokter</th>
                    <th style="">Nama dokter</th>
                    <th>Alamat</th>
                    <th>No Telp</th>
                    <th>Spesialis</th>
                    <th>Poli</th>
                    <th>Hari</th>
                    <th>Jam</th>
                    
				</tr>
			</thead>
			<tbody>
				@foreach ($dokters as $key => $dokters)
				<tr style="min-height:22px;height:22px;">
				
					<td>{{ $dokters->kd_dokter }}</td>
					<td>{{ $dokters->nama_dokter }}</td>
                    <td>{{ $dokters->alamat }}</td>
                    <td>{{ $dokters->no_telp }}</td>   
                    <td>{{ $dokters->spesialis }}</td>
                    <td>{{ $dokters->nama_poli }}</td>
                    <td>{{ $dokters->nama_hari }}</td>
                    <td>{{ $dokters->jam }}</td>
                    
				</tr>
				@endforeach
			</tbody>
		</table>

@stop                
       