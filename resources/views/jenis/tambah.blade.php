@extends('layout.layout')

@section('content')
 <div class="card-header">
    <h3 class="card-title">Edit Data Jenis</h3>
 </div>
              <!-- /.card-header -->
 <div class="card-body">
 	<form method="POST" action="/jenis/tambah">
	@csrf
	
	<div class="form-group">
		<label>Id Jenis</label>
	<input class="form-control" type="text" name="id_jenis" placeholder="Id Jenis">
	</div>
	<div class="form-group">
		<label>Jenis Laundry</label>
	<input class="form-control" type="text" name="jenis_laundry" placeholder="Jenis Laundry">
	</div>
	<div class="form-group">
		<label>Lama Proses</label>
	<input class="form-control" type="text"  name="lama_proses" placeholder="Lama Proses">
	</div>
	<div class="form-group">
		<label>Tarif</label>
	<input class="form-control" type="text"  name="tarif" placeholder="Tarif">
	</div>
	<div class="form-group">
		<input class="btn btn-primary" type="submit" name="Edit">
</form>
</div>
@endsection