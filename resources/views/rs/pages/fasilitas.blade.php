<?php 
	$title = 'Fasilitas';
    $content = '';
    ?>
@extends('layouts.template')

@section('main')

	<div class="container">
		<h3>Fasilitas Rumah Sakit Kartika Husada</h3>	
			<ol> Pelayanan Rawat Jalan / Poliklinik 
				<li> Umum </li>
				<li> Anak</li>
				<li> Penyakit Dalam </li>
				<li> Kebidanan </li>
				<li> Spesialis Mata </li>
				<li> Spesialis Paru </li>
				<li> Spesialis Syaraf </li>
				<li> Spesialis Kulit & Kelamin </li>
				<li> Gigi </li>
				<li> Bedah  ( Umum )</li>
				<li> Fisiotherapi ( Rehab Medik ) </li>
			</ol>
		<h3> Pelayanan Rawat Inap : </h3>
		<ol>
			<li>Ruang Perawatan VIP</li>
			<li>Ruang Perawatan VVIP</li>
			<li>Ruang Perawatan KelasI</li>
			<li>Ruang Perawatan KelasII</li>
			<li>Ruang Perawatan KelasIII</li>
		</ol>
		<h3> Unit GAwat Darurat ( 24 Jam ) </h3>
		<h3>Pemeriksaan Medical Check-Up</h3>
			<ol>
				<li>Medical Check-Up tipe A (Ekonomis)</li>
				<li>Medical Check-Up tipe B ( Standar )</li>
				<li>Medical Check-Up tipe C ( Standar Plus)</li>
			</ol>
	</div>
@stop