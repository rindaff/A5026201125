<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Tabel Absen</h3>

	<a href="/absen"> Kembali</a>

	<br/>
	<br/>

	<form action="/absen/store" method="post">
		{{ csrf_field() }}
		IDPegawai <input type="number" name="idpegawai" required="required"> <br/>
		Tanggal <input type="date" name="tanggal" required="required"> <br/>
		Status <input type="text" name="status" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>

</body>
</html>
