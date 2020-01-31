@extends('layouts.master')

@section('content')
		@if(session('sukses'))
		<div class="alert alert-success" role="alert">
			{{session('sukses')}}
		</div>
		@endif
		<div class="row" style="margin-top: 20px;">
			<div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6" ></div>
                        <div class="col-sm-6" >
                        	<form style="float: right;" class="form-inline my-2 my-lg-0" method="GET" action="/mahasiswa" style="margin-left: 25px;">
						      <input name="find" class="form-control mr-sm-2" type="search" size="20;" placeholder="Search by Name" aria-label="Search">
						      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
						    </form>
                        </div>
                    </div>
            </div>	
			</div>
			<div style="margin-top: 20px;" class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6" ><h1>Data Mahasiswa</h1></div>
                        <div class="col-sm-6" >
                        	<button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
                        		Tambah Data Mahasiswa
                        	</button>
                        </div>
                    </div>
                
            </div>
			<div class="col-6">
				
			</div>
			<div class="col-6">
				<!-- Button trigger modal -->
				
			</div>
			<table class="table table-hover">
				<tr>
					<th>Nim</th>
					<th>Nama</th>
					<!-- <th>Kelas</th>
					<th>Jurusan</th> -->
					<th>Aksi</th>
				</tr>
				@foreach($data_mahasiswa as $mahasiswa)
				<tr>
					<td>{{$mahasiswa->nim}}</td>
					<td>{{$mahasiswa->nama}}</td>
					<!-- <td>{{$mahasiswa->kelas}}</td>
					<td>{{$mahasiswa->jurusan}}</td> -->
					<td>
						<a href="/mahasiswa/{{$mahasiswa->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
						<a href="/mahasiswa/{{$mahasiswa->id}}/delete" class="btn btn-danger btn-sm">Delete</a>
						<a href="/mahasiswa/{{$mahasiswa->id}}/detail" class="btn btn-info btn-sm">Detail</a>
					</td>
				</tr>
				@endforeach
			</table>
		</div>
	</div>

	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Mahasiswa</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	      	<form action="/mahasiswa/create" method="POST">
	      		{{csrf_field()}}
			  <div class="form-group">
			    <label for="exampleInputEmail1">Nim</label>
			    <input name="nim" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nim">
			   			    			    
			  </div>
			  <div class="form-group">
			  	<label for="exampleInputEmail1">Nama</label>
			    <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama">
			  </div>
			  <div class="form-group">
			  	<label for="exampleInputEmail1">Kelas</label>
			    <input name="kelas" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Kelas">
			  </div>
			  <div class="form-group">
			  	<label for="exampleInputEmail1">Jurusan</label>
			    <input name="jurusan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Jurusan">	
			  </div>

	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        <button type="submit" class="btn btn-primary">Submit</button>
			</form>
	      </div>
	    </div>
	  </div>
@endsection