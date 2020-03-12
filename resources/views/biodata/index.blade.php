@extends("layout")

@section("content")
	<h1>Daftar Mahasiswa</h1>
	<a href="{{ route('biodata.create') }}" class="btn btn-primary">Tambah</a>
	<p>
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th width="5%">ID</th>
				<th width="15%">Nama</th>
				<th width="15%">NIM</th>
				<th width="35%">Alamat</th>
				<th width="35%">Action</th>
			</tr>
		</thead>
		<tbody>
			@forelse($mahasiswa as $data)
				<tr>
					<td>{{ $data->id }}</td>
					<td>{{ $data->name }}</td>
					<td>{{ $data->nim }}</td>
					<td>{{ $data->address }}</td>
					<td>
						<a href="{{ route('biodata.show',['id' => $data->id]) }}" class="btn btn-success">Detail</a>
						<a href="{{ route('biodata.edit',['id' => $data->id]) }}" class="btn btn-warning">Edit</a>
						<a onclick="return confirm('Apakah Anda Yakin?');" href="{{ route('biodata.destroy',['id' => $data->id]) }}" type="button" class="btn btn-danger">Delete</a>
					</td>	
				</tr>
			@empty
				<tr>
					<td colspan="4">Data belum tersedia!</td>
				</tr>
			@endforelse
		</tbody>
	</table>
@endsection