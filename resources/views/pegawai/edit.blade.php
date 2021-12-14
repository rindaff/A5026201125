@extends('layout.bahagia')

   @section('title', 'Mengedit Data Pegawai')
   @section('judulhalaman', 'Edit Data Pegawai')

   @section('konten')
<body>


	@foreach($pegawai as $p)
	<form action="/pegawai/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>
		Nama <input type="text" required="required" name="nama" value="{{ $p->pegawai_nama }}"> <br/>
		Jabatan <input type="text" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}"> <br/>
		Umur <input type="number" required="required" name="umur" value="{{ $p->pegawai_umur }}"> <br/>
		Alamat <textarea required="required" name="alamat">{{ $p->pegawai_alamat }}</textarea> <br/>
		<p><input type="submit" class="btn btn-success" value="Simpan Data"></p>
        <p> <a href="/pegawai" class = "btn btn-warning"> Kembali</a></p>
	</form>
	@endforeach


</body>
@endsection
