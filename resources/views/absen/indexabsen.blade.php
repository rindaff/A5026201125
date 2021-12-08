    @extends('layout.bahagia')

    @section('title', ' Data Absensi')
    @section('judulhalaman', 'Daftar Absensi Pegawai')

    @section('konten')


	<a href="/absen/add" class = "btn btn-info"> + Tambah Absensi</a>

	<br/>
	<br/>

	<table border="1" class = "table table-striped">
		<tr>

			<th>IDPegawai</th>
			<th>Tanggal</th>
			<th>Status</th>
			<th>Opsi</th>
		</tr>
		@foreach($absen as $a)
		<tr>

			<td>{{ $a->IDPegawai }}</td>
			<td>{{ $a->Tanggal }}</td>
			<td>{{ $a->Status }}</td>
			<td>
				<a href="/absen/edit/{{ $a->ID}}">Edit Absensi</a>
				|
				<a href="/absen/hapus/{{ $a->ID }}">Delete Absensi</a>
			</td>
		</tr>
		@endforeach
	</table>
    <p>
        Keterangan Status: <br>
        I : Izin <br>
        S : Sakit <br>
        A : Alpha <br>
        </p>

@endsection
