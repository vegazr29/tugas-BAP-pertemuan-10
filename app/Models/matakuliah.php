<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class matakuliah extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'matakuliah';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['kode_matakuliah', 'nama_matakuliah', 'sks'];

    
}
