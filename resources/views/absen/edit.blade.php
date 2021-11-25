<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Edit Data Absen</h3>

	<a href="/absen"> Kembali</a>

	<br/>
	<br/>

	@foreach($absen as $p)
	<form action="/absen/update" method="post">
		{{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $p->absen_id }}"> <br/>
		IDPegawai <input type="number" required="required" name="idpegawai" value="{{ $p->absen_id_pegawai }}"> <br/>
		Tanggal <input type="date" required="required" name="tanggal" value="{{ $p->absen_tanggal }}"> <br/>
		Status <input type="text" required="required" name="status" value="{{ $p->absen_status }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach


</body>
</html>
