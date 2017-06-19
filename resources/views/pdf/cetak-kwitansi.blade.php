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
	<h2>Rumah Sakit Karika Husada</h2>
	<p>Jalan diponegoro No.12</p>
	<p>Tambun, Bekasi</p>
	<div class="row" style="padding-left: 320px">
		<div class="col-md-4"></div>
		<div class="col-md-4"><h3 style="font-size: 25px;">Kwitansi</h3></div>
		<div class="col-md-4"></div>
	</div>
	
	<hr/>

		<div class="row" >
                    <div class="col-lg-8" >
			        <table class="table table-striped">
						<tr>
							<th>No MR </th>
							<td>: 1004</td>
						</tr>
						
						<tr>
							<th>Tanggal Masuk </th>
							<td>: 21-04-2017 </td>
						</tr>
						<tr>
							<th>Tanggal Keluar </th>
							<td>: 25-04-2017 </td>
						</tr>
						<tr>
							<th>Lama Inap </th>
							<td>: 4 Hari</td>
						</tr>
						<tr>
							<th>Nama </th>
							<td>: Siti Marsita </td>
						</tr>
						<tr>
							<th>Nama Kamar </th>
							<td>: Melati</td>
						</tr>
						<tr>
							<th>Kelas </th>
							<td>: Kelas 1</td>
						</tr>
						<tr>
							<th>Total Bayar </th>
							<td>: 450000</td>
						</tr>
						
					</table>
                    </div>
                </div>
                  <!--END BLOCK SECTION -->
         <hr style="border-top: 0.5px solid black ">       
@stop 

