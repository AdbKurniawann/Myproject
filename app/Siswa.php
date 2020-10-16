<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table ='siswa';
    
    protected $fillable = ['judul', 'pengarang', 'penerbit', 'tahun_terbit', 'jumlah_buku', 'gambar'];
}
