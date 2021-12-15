@extends('layout.bahagia')
@section('title', 'Mengedit Karyawan')
@section('judulhalaman', 'Edit Data Karyawan')

@section('konten')

@foreach ($karyawan1 as $b)
<form action="/karyawan1/update" class="form-group" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="NIP" value="{{ $k->NIP }}"> <br/>
		Nama <input type="text" required="required" name="Nama" value="{{ $b->Nama }}"> <br/>
		Pangkat <input type="text" required="required" name="Pangkat" value="{{ $b->Pangkat }}"> <br/>
		Gaji <input type="number" required="required" name="Gaji" value="{{ $b->Gaji }}"> <br/>
    <input type="submit" class = "btn btn-success" value="Simpan Data">
    <a href="/karyawan1" class="btn btn-warning"> Kembali</a>
</form>
@endforeach
    @endsection
