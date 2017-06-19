@extends('layouts.print')

@section('content')
	
	<style type="text/css">
		td{
			border: 0px !important;
		}
		th{
			background-color: white;
			border: 0px !important;
			
			text-align: left;
			max-width: 120px;
        	width: 120px;
		}
	</style>

	<h3>Cetak Kartu Pasien</h3>
	<hr/>

		<div class="row" >
                    <div class="col-lg-8" >
			        <table class="table table-striped">
						<tr>
							<th>No MR </th>
							<td>: 1004</td>
						</tr>
						<tr>
							<th>Nama </th>
							<td>: Siti Marsita </td>
						</tr>
						<tr>
							<th>Jenis Kelamin </th>
							<td>: Perempuan </td>
						</tr>
						<tr>
							<th>Tempat Lahir </th>
							<td>: Bekasi </td>
						</tr>
						<tr>
							<th>Tanggal Lahir </th>
							<td>: 12-08-1990 </td>
						</tr>
						<tr>
							<th>Alamat </th>
							<td>: Jl Lingkar Cibitung</td>
						</tr>
						
					</table>
                    </div>
                </div>
                  <!--END BLOCK SECTION -->
         <hr style="border-top: 0.5px solid black ">       
@stop 

