@extends('layouts.master')

@section('content')

		<h1>Edit Data Mahasiswa</h1>
		@if(session('sukses'))
		<div class="alert alert-success" role="alert">
			{{session('sukses')}}
		</div>
		@endif
		<div class="row" style="margin-top: 20px;">
			<div class="col-lg-12">
			
				<form action="/mahasiswa/{{$mahasiswa->id}}/update" method="POST">
		      		{{csrf_field()}}
				  <div class="form-group">
				    <label for="exampleInputEmail1">Nim</label>
				    <input name="nim" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nim" value="{{$mahasiswa->nim}}">
				   			    			    
				  </div>
				  <div class="form-group">
				  	<label for="exampleInputEmail1">Nama</label>
				    <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama" value="{{$mahasiswa->nama}}">
				  </div>
				  <div class="form-group">
				  	<label for="exampleInputEmail1">Kelas</label>
				    <input name="kelas" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Kelas" value="{{$mahasiswa->kelas}}">
				  </div>
				  <div class="form-group">
				  	<label for="exampleInputEmail1">Jurusan</label>
				    <input name="jurusan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Jurusan" value="{{$mahasiswa->jurusan}}">	
				  </div>
				  <button type="submit" class="btn btn-warning">Edit</button>
				</form>
			</div>
		</div>
@endsection