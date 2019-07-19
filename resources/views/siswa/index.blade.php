@extends('layouts.master')

@section('content')
	@if(session('sukses'))
	<div class="alert alert-primary" role="alert">
		{{session('sukses')}}
	</div>
	@endif
	<div class='row'>			
		<div class='col-6'>
			<h1>Data Siswa</h1>
		</div>
		<div class='col-6'>
			<!-- Button trigger modal -->
			<button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#exampleModal">
			  Tambah Data Siswa
			</button>				
		</div>
		<table class='table table-hover'>
			<tr>
				<th>NAMA</th>
				<th>JENIS KELAMIN</th>
				<th>AGAMA</th>
				<th>ALAMAT</th>
				<th>ALAMAT</th>
			</tr>
			@foreach($data_siswa as $siswa)
			<tr>
				<td>{{$siswa->nama_lengkap}}</td>
				<td>@if($siswa->jenis_kelamin == 'L')Laki-laki @else Perempuan @endif</td>
				<td>{{$siswa->agama}}</td>
				<td>{{$siswa->alamat}}</td>
				<td>
					<a href="/siswa/{{$siswa->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
					<a href="/siswa/{{$siswa->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau dihapus?')">Delete</a>
				</td>
			</tr>
			@endforeach
		</table>
	</div>
	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>
		  <div class="modal-body">
			<form action="/siswa/create" method="post">
			{{csrf_field()}}
			  <div class="form-group">
				<label for="exampleInputEmail1">Nama Lengkap</label>
				<input type="text" class="form-control" placeholder="Enter name" name="nama_lengkap">
			  </div>
			  <div class="form-group">
				<label for="exampleFormControlSelect1">Jenis Kelamin</label>
				<select name="jenis_kelamin" class="form-control">
					<option value="">--Silakan Pilih--</option>
					<option value="L">Laki-laki</option>
					<option value="p">Perempuan</option>
				</select>
			  </div>
			  <div class="form-group">
				<label for="exampleInputEmail1">Agama</label>
				<input type="text" class="form-control" placeholder="Isi agama" name="agama">
			  </div>
			  <div class="form-group">
				<label for="exampleInputEmail1">Alamat</label>
				<textarea name="alamat" class="form-control"></textarea>
			  </div>			
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			<button type="submit" class="btn btn-primary">Submit</button>
		  </div>
			</form>
		</div>
	  </div>
	</div>
@endsection
