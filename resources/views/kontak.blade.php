<!-- Menghubungkan dengan view template master -->
@extends('master')
 
<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Halaman Kontak')
 
 
<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')
 
	<p>Ini Adalah Halaman Kontak</p>
	
	<table border="1">
		<tr>
			<td>Email</td>
			<td>:</td>
			<td>Rivonfotriyodi05@gmail.com</td>
		</tr>
		<tr>
			<td>NoHp</td>
			<td>:</td>
			<td>081268446787</td>
		</tr>
	</table>
 
@endsection