<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index(Request $request)
    {
    	if ($request->has('find')) {
    		$data_mahasiswa = \App\Mahasiswa::where('nama','LIKE','%'.$request->find.'%')->get();
    	}else{
			$data_mahasiswa = \App\Mahasiswa::all();
    	}
    	return view('mahasiswa.index',['data_mahasiswa' => $data_mahasiswa]);
    }

    public function create(Request $request)
    {
    	\App\Mahasiswa::create($request->all());
    	return redirect('/mahasiswa')->with('sukses','Data Baru Berhasil Di Tambahkan');
    }
    public function edit($id)
    {
    	$mahasiswa = \App\Mahasiswa::find($id);
    	return view('mahasiswa/edit',['mahasiswa'=> $mahasiswa]);
    }
    public function update(Request $request,$id)
    {
    	$mahasiswa = \App\Mahasiswa::find($id);
    	$mahasiswa->update($request->all());
    	return redirect('/mahasiswa')->with('sukses','Data Berhasil di Edit');
    }
    public function delete($id)
    {
    	$mahasiswa = \App\Mahasiswa::find($id);
    	$mahasiswa->delete();
    	return redirect('/mahasiswa')->with('sukses','Data Berhasil di Hapus');

    }
    public function detail($id)
    {
    	$mahasiswa = \App\Mahasiswa::find($id);
    	return view('mahasiswa/detail',['mahasiswa'=> $mahasiswa]);

    }
}
