@extends("layout")

@section("content")
<br><br>
<ul>
	<li>ID Mahasiswa: {{ $data->id }} </li>
	<li>Nama Mahasiswa: {{ $data->name }} </li>
	<li>NIM Mahasiswa: {{ $data->nim }} </li>
	<li>Alamat Mahasiswa: {{ $data->address }} </li>
	<!-- <li>Picture : <br><img src="{{ Storage::url( $data->photo ) }}" alt="{{ Storage::url( $data->photo ) }}" width="150px"></li> -->
</ul>

<a class="btn btn-dark" href="{{ route('biodata.index') }}">Kembali</a>
@endsection