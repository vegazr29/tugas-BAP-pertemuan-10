<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    protected $table = "mahasiswa";

    protected $fillable = ['StudentID','Nama','Jurusan','Tahun_masuk'];
}
