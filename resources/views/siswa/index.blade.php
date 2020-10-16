@extends('layouts.master')

@section('content')
    @if(session('sukses'))
    <div class="alert alert-success" role="alert">
        {{session('sukses')}}
    </div>
    @endif
    <div class="container">
        <div class="row">
                <div class="col-lg-8">
                    <h1>Data Buku</h1>
                </div>
            <div class="col-lg-12">
            <div class="float-right">
            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal">
            Tambah Siswa
            </button>
            
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
            <form action="/dashboard/create" method="POST">
            @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Judul</label>
                        <input type="text" name="judul" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Judul">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Pengarang</label>
                        <input type="text" name="pengarang" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Pengarang">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Penerbit</label>
                        <input type="text" name="penerbit"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Penerbit">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tahun Terbit</label>
                        <input type="text" name="tahun_terbit"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tahun Terbit">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Jumlah buku</label>
                        <input type="text" name="jumlah_buku"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Jumlah Buku">
                    </div>
                    <div class="form-grup">
                            <label >Gambar</label><br>
                            <input type="file" name="gambar" class="form-control"><br> 
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
                </form>
            </div>
            </div>
    
            </div>
            </div>
        
        </div>
                <table class="table table-hover">
                    <tr>
                        <th>Judul</th>
                        <th>Pengarang</th>
                        <th>Penerbit</th>
                        <th>Tahun Terbit</th>
                        <th>Jumlah buku</th>
                        <th>AKSI</th>
                    </tr>
                        @foreach ($data_siswa as $siswa)
                    <tr>
                        <td>{{$siswa->judul}}</td>
                        <td>{{$siswa->pengarang}}</td>
                        <td>{{$siswa->penerbit}}</td>
                        <td>{{$siswa->tahun_terbit}}</td>
                        <td>{{$siswa->jumlah_buku}}</td>
                        <td><a href="/dashboard/{{$siswa->id}}/edit" class="btn btn-info btn-sm">EDIT</a>
                        <a href="/dashboard/{{$siswa->id}}/delete" class="btn btn-danger btn-sm">DELETE</a></td>
                    </tr>
                @endforeach
                </table>          
        </div>
    </div>

@endsection
    