<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dosen extends Model
{
    protected $table = "dosens";

    protected $fillable = ['DosenID','nama_dosen','nama_matakuliah','tahun_ajar','kode_matakuliah'];
}
