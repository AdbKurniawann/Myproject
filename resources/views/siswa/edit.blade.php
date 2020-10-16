@extends('layouts.master')

@section('content')
    <h1>EDIT DATA BUKU</h1>
    @if(session('sukses'))
    <div class="alert alert-success" role="alert">
        {{session('sukses')}}
    </div>
    @endif
        <div class="row">
        <div class="col-lg-12">
        <form action="/dashboard/{{$siswa->id}}/update" method="POST">
            @csrf
            <div class="form-group">
                        <label for="exampleInputEmail1">Judul</label>
                        <input type="text" name="judul" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$siswa->judul}}" placeholder="Judul">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Pengarang</label>
                        <input type="text" name="pengarang" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$siswa->pengarang}}" placeholder="Pengarang">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Penerbit</label>
                        <input type="text" name="penerbit"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$siswa->penerbit}}" placeholder="Penerbit">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tahun Terbit</label>
                        <input type="text" name="tahun_terbit"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$siswa->tahun_terbit}}" placeholder="Tahun Terbit">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Jumlah buku</label>
                        <input type="text" name="jumlah_buku"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$siswa->jumlah_buku}}" placeholder="Jumlah Buku">
                    </div>
                    <div class="form-grup">
                            <label >Gambar</label><br>
                            <input type="file" name="gambar" class="form-control"><br>
                    </div>
                    <button type="submit" class="btn btn-sm btn-primary" >Submit</button>
                    </form>
                    </div>
                    </div>
@endsection