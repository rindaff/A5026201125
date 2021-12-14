@extends('layout.bahagia')
@section('title', 'Data Bedak')
@section('judulhalaman', 'Daftar Data Bedak')

@section('konten')

<a href="/bedak/add" class="btn btn-info" > + Tambah Bedak Baru</a>

<br/>
<br/>
<div class="container">
    <form action="/bedak/cari" method="GET">
        <div class="col-xs-5">
        <input type="text" class="form-control xs-5" name="cari" placeholder="Cari Bedak berdasarkan merk atau stock .." value="{{ old('cari') }}">
        </div>
        <input type="submit" class="btn-primary" value="CARI">
    </form>
</div>
<br>

<table border="1" class = "table table-hover">
    <tr>
        <th>Kode Bedak</th>
			<th>Merk Bedak</th>
			<th>Stock Bedak</th>
			<th>Status</th>
            <th>Opsi</th>
    </tr>
    @foreach($bedak as $b)
    <tr>
        <td>{{ $b->kodebedak }}</td>
			<td>{{ $b->merkbedak }}</td>
			<td>{{ $b->stockbedak }}</td>
			<td>{{ $b->tersedia }}</td>
        <td>
            <a href="/bedak/view/{{ $b->kodebedak }}">View Detail</a>
                |
				<a href="/bedak/edit/{{ $b->kodebedak }}">Edit</a>
				|
				<a href="/bedak/hapus/{{ $b->kodebedak}}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

    {{ $bedak->links() }}


@endsection








