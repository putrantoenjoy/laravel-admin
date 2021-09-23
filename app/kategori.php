<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    //
    protected $fillable = [
        'nama_tugas',
        'id_kategori',
        'ket_tugas',
        'status_tugas'
    ];
}
