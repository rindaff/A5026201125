@extends('layout.bahagia')

   @section('title', 'Detail Data Pegawai')
   @section('judulhalaman', 'Detail Data Pegawai')

   @section('konten')
<body>

	@foreach($pegawai as $p)

    <div>
        <label for=" ">Nama </label>
        <p>{{ $p->pegawai_nama }}
        <p>
    </div>

    <div>
        <label for=" ">Jabatan </label>
        <p>{{ $p->pegawai_jabatan }}
        <p>
    </div>

    <div>
        <label for=" ">Umur </label>
        <p>{{ $p->pegawai_umur }}
        <p>
    </div>

    <label for=" ">Alamat</label>
    <p>{{ $p->pegawai_alamat }}
    <p> <a href="/pegawai" class = "btn btn-warning"> Kembali</a></p>

	@endforeach


</body>
@endsection
