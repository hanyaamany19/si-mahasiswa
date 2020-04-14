@extends("layout")

@section("content")

    <h1>
        Daftar Mahasiswa
        <a href="{{ route('biodata.create') }}" type="button" class="btn btn-primary" style="float: right;">Tambah</a>
        <a href="{{ action('ExportExcelController@export') }}" class="btn btn-success">Export to Excel</a>
    </h1>
    
    <br>
    <table class="table table-striped table-hover text-center" id="myTable">
        <thead>
            <tr>
                <th width="5%">ID</th>
                <th width="15%">NAMA</th>
                <th width="15%">NIM</th>
                <th width="15%">Alamat</th>
                <th width="25%">ACTION</th>
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
                        <a href="{{ route('biodata.show', ['biodatum' => $data->id]) }}" class="btn btn-success">Detail</a>
                        <a href="{{ route('biodata.edit', ['biodatum' => $data->id]) }}" class="btn btn-warning">Edit</a>
                        <a onclick="return confirm('Apakah Anda yakin?');" href="{{ route('biodata.destroy', ['biodatum' => $data->id]) }}" class="btn btn-danger">Delete</a>
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