@extends('layout.bahagia')
@section('title', 'Mengedit Bedak')
@section('judulhalaman', 'Edit Data Bedak')

@section('konten')

@foreach ($bedak as $b)
<form action="/bedak/update" class="form-group" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="id" value="{{ $b->kodebedak }}"> <br/>
    <div class="row">
        <div class="col-4">
            <b><label for="merk">Merk</label></b>
        </div>
        <div class="col-8">
            <input type="text" class="form-control" name="merk" required="required">
        </div>
    </div>
    <div class="row">
        <div class="col-4">
            <b><label for="stock">Stock</label></b>
        </div>
        <div class="col-8">
            <input type="number" class="form-control" name="stock" required="required">
        </div>
    </div>
    <div class="row">
        <div class="col-4">
            <b><label for="tersedia">Tersedia</label></b>
        </div>
        <div class="col-8">
            <select id = "tersedia" class="form-control" name="tersedia" required="required">
                <option value = "Y">Y</option>
                <option value = "N">N</option>
            </select>
            </div>
    <input type="submit" class = "btn btn-success" value="Simpan Data">
    <a href="/bedak" class="btn btn-warning"> Kembali</a>
</form>
@endforeach
    @endsection
