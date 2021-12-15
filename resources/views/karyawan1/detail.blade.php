@extends('layout.bahagia')
@section('title', 'Detail Karyawan')
@section('judulhalaman', 'Detail Karyawan')
@section('konten')

<body>

	@foreach($karyawan1 as $b)

    <div>
        <label for="NIP ">NIP </label></b>
        <p>{{$b->NIP }}
        <p>
    </div>

    <div>
        <label for="Nama">Nama</label></b>
        <p>{{$b->Nama}}
        <p>
    </div>

    <div>
        <label for="Pangkat">Pangkat</label></b>
        <p>{{$b->Pangkat}}
        <p>
    </div>
    <div>
        <label for="Gaji">Gaji</label></b>
        <p>{{ number_format($k->Gaji, 0, ',', '.') }}
        <p>
    </div>

	 <a href="/karyawan1" class="btn btn-warning"> Kembali</a>

    @endforeach
</body>
@endsection
