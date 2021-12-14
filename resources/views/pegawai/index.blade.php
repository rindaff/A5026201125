@extends('layout.bahagia')

@section('title', ' Data Pegawai')
@section('judulhalaman', 'Daftar Data Pegawai')

@section('konten')


	<h3>Data Pegawai</h3>

	<a href="/pegawai/tambah" class = "btn btn-info"> + Tambah Pegawai Baru</a>

	<br/>
	<br/>

    <div class="container">
        <form action="/pegawai/cari" method="GET">
            <div class="col-xs-5">
            <input type="text" class="form-control xs-5" name="cari" placeholder="Cari Pegawai berdasarkan nama atau alamat .." value="{{ old('cari') }}">
            </div>
            <input type="submit" class="btn btn-primary" value="CARI">
        </form>
    </div>

<br>
	<table border="1" class = "table table-hover">
		<tr>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
		@foreach($pegawai as $p)
		<tr>
			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->pegawai_alamat }}</td>
			<td>
				<a href="/pegawai/view/{{ $p->pegawai_id }}">View Detail</a>
                |
				<a href="/pegawai/edit/{{ $p->pegawai_id }}">Edit</a>
				|
				<a href="/pegawai/hapus/{{ $p->pegawai_id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

    {{ $pegawai->links() }}


@endsection
