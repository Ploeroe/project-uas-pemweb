@extends('template.header')

@section('custom_css')
<link rel="stylesheet" href="{{asset('css/facility-m.css')}}">
<link rel="stylesheet" href="{{asset('css/navbar/navbar-m.css')}}">

@endsection
@include('navbar.managenavbar')

@section('container')
    <h1>Facility Listing</h1>
        <form action="/facility/store" method="post">
		{{ csrf_field() }}
		Nama Fasilitas <input type="text" name="namaFasilitas" required="required"> <br/>
		Deskripsi <input type="text" name="descFasilitas" required="required"> <br/>
		Jenis <input type="text" name="jenisFasilitas" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
@endsection