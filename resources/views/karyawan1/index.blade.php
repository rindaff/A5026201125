@extends('layout.bahagia')
@section('title', 'Data Karyawan')
@section('judulhalaman', 'Daftar Data Karyawan')

@section('konten')


<br/>
<br/>

<table border="1" class = "table table-hover">
    <tr>
        <th>NIP</th>
			<th>Nama</th>
			<th>Pangkat</th>
			<th>Gaji</th>
    </tr>
    @foreach($karyawan as $b)
    <tr>
        <td>{{ $b->NIP }}</td>
			<td>{{ $b->Nama }}</td>
			<td>{{ $b->Pangkat }}</td>
			<td>{{ $b->Gaji }}</td>
        <td>
            <a href="/karyawan1/view/{{ $b->NIP }}">View Detail</a>
                |
				<a href="/karyawan1/edit/{{ $b->NIP}}">Edit</a>
			</td>
		</tr>
		@endforeach
	</table>



@endsection








