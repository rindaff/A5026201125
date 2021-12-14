    @extends('layout.bahagia')

    @section('title', ' Data Absensi')
    @section('judulhalaman', 'Daftar Absensi Pegawai')

    @section('konten')


	<a href="/absen/add" class = "btn btn-info"> + Tambah Absensi</a>

	<br/>
	<br/>

	<table border="1" class = "table table-striped">
		<tr>

			<th>Nama Pegawai</th>
			<th>Tanggal</th>
			<th>Status</th>
			<th>Opsi</th>
		</tr>
		@foreach($absen as $a)
		<tr>

			<td>{{ $a->pegawai_nama }}</td>
			<td>{{ $a->Tanggal }}</td>
			<td>{{ $a->Status }}</td>
			<td>
				<a href="/absen/edit/{{ $a->ID}}">Edit Absensi</a>
				|
				<a href="/absen/hapus/{{ $a->ID }}">Hapus Absensi</a>
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
        {{ $absen ->links() }}

@endsection
