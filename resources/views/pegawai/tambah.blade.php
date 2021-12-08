@extends('layout.bahagia')

@section('title', 'Menambah Pegawai')


@section('judulhalaman', 'Menambah Data Pegawai')


@section('konten')

	<h3>Data Pegawai</h3>


	<br/>
	<br/>

	<form action="/pegawai/store" method="post">
		{{ csrf_field() }}
		Nama <input type="text" name="nama" required="required"> <br/>
		Jabatan <input type="text" name="jabatan" required="required"> <br/>
		Umur <input type="number" name="umur" required="required"> <br/>
		Alamat <textarea name="alamat" required="required"></textarea> <br/>
		<p><input type="submit" class="btn btn-success" value="Simpan Data"></p>
        <p> <a href="/pegawai" class = "btn btn-warning"> Kembali</a></p>
	</form>

@endsection
