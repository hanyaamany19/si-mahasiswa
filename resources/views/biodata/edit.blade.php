@extends("layout")

@section("content")
	<form action="{{ route('biodata.update', ['id' => $data->id]) }}" method="POST" class="form-horizontal">
		
		@csrf

		<div class="form-group">
			<label class="control-label">Nama</label>
			<input type="text" name="name" class="form-control" value="{{ $data->name }}">
		</div>
		<div class="form-group">
			<label class="control-label">NIM</label>
			<input type="text" name="nim" class="form-control" value="{{ $data->nim }}">
		</div>
		<div class="form-group">
			<label class="control-label">Alamat</label>
			<textarea name="address" rows="5" class="form-control">{{ $data->address }}</textarea>
		</div>
		<div class="form-group">
			<label class="control-label">Foto</label>
			<input type="file" name="file" required>
		</div>
		<div class="form-group">
			<button class="btn btn-primary" type="submit">Simpan</button>
			<a href="{{ route('biodata.index') }}" class="btn btn-danger">Batal</a>
		</div>
	</form>
@endsection