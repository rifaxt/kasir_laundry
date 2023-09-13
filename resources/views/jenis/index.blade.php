@extends('layout.layout')

@section('content')
<div class="card-header">
    <h3 class="card-title">Aplikasi Kasir Laundry</h3>
</div>
<!-- /.card-header -->
<div class="card-body">
    <a class="btn btn-warning" href="/jenis/tambah">Tambah</a>
    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Id Jenis</th>
                <th>Jenis Laundry</th>
                <th>Lama Proses</th>
                <th>Tarif</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($jenis as $row)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $row->id_jenis }}</td>
                <td>{{ $row->jenis_laundry }}</td>
                <td>{{ $row->lama_proses }}</td>
                <td>{{ $row->tarif }}</td>
                <td>
                    <a class="btn btn-primary" href="/jenis/edit/{{ $row->id }}">Edit</a> |
                    <a class="btn btn-danger" href="/jenis/delete/{{ $row->id }}">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<!-- /.card-body -->
@endsection