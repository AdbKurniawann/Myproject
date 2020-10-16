<?php

namespace App\Http\Controllers;
use App\Siswa;
use Illuminate\Http\Request;

class dashboardcontroller extends Controller
{
    public function index(){
        $data_siswa = siswa::all();
        return view('siswa.index',['data_siswa' => $data_siswa]);
    }
    public function create(Request $request){
        \App\siswa::create($request->all());
        return redirect('/dashboard')->with('sukses', 'Data Berhasil Ditambahkan');    
    }
    public function edit($id)
    {
        $siswa = \App\siswa::find($id);
        return view('siswa.edit', ['siswa' => $siswa]);
    }
    public function update(Request $request,$id)
    {
        $siswa = \App\siswa::find($id);
        $siswa->update($request->all());
        if($request->hasFile('gambar')){
            $request->file('gambar')->move('images/',$request->file('gambar')->getClientOriginalName());
            $siswa->gambar = $request->file('gambar')->getClientOriginalName();
            $siswa->save;
        }
        return redirect('/dashboard')->with('sukses', 'Data Berhasil Diupdate');
    }
    public function delete($id)
    {
        $siswa = \App\siswa::find($id);
        $siswa->delete();
        return redirect('/dashboard')->with('sukses', 'Data Berhasil Dihapus');

    }
}
