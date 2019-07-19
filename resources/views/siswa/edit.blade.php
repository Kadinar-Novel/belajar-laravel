@extends('layouts.master')

@section('content')
	<h1>Edit Data Siswa</h1>
	@if(session('sukses'))
	<div class="alert alert-primary" role="alert">
		{{session('sukses')}}
	</div>
	@endif
	<div class='row'>
		<div class="col-12">
		<form action="/siswa/{{$siswa->id}}/update" method="post">
		{{csrf_field()}}
			<div class="form-group">
				<label for="exampleInputEmail1">Nama Lengkap</label>
				<input type="text" class="form-control" placeholder="Enter name" name="nama_lengkap" value="{{$siswa->nama_lengkap}}">
			</div>
			<div class="form-group">
				<label for="exampleFormControlSelect1">Jenis Kelamin</label>
				<select name="jenis_kelamin" class="form-control">
					<option value="">--Silakan Pilih--</option>
					<option value="L" @if($siswa->jenis_kelamin ==  'L') selected @endif >Laki-laki</option>
					<option value="P" @if($siswa->jenis_kelamin ==  'P') selected @endif >Perempuan</option>
				</select>
			</div>
			<div class="form-group">
				<label for="exampleInputEmail1">Agama</label>
				<input type="text" class="form-control" placeholder="Isi agama" name="agama" value="{{$siswa->agama}}">
			</div>
			<div class="form-group">
				<label for="exampleInputEmail1">Alamat</label>
				<textarea name="alamat" class="form-control">{{$siswa->alamat}}</textarea>
			</div>
			<button type="submit" class="btn btn-primary btn-warning btn-sm">Update</button>
			<a href="/siswa/" class="btn btn-primary btn-sm">Back</a>
		</form>
		</div>
	</div>
@endsection