@extends('layout.bahagia')
@section('title', 'Detail Bedak')
@section('judulhalaman', 'Detail Bedak')
@section('konten')

<body>

	@foreach($bedak as $b)

    <div>
        <label for="merk">Merk</label></b>
        <p>{{$b->merkbedak}}
        <p>
    </div>

    <div>
        <label for="stock">Stock</label></b>
        <p>{{$b->stockbedak}}
        <p>
    </div>

    <div>
        <label for="status">Status</label></b>
        <p>{{$b->tersedia}}
        <p>
    </div>

	 <a href="/bedak" class="btn btn-warning"> Kembali</a>

    @endforeach
</body>
@endsection
