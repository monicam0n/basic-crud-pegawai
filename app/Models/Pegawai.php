<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $table = 'pegawais';
    protected $primarykey = 'id';
    protected $fillable =[
        'name', 'posisi', 'gaji'
    ];
}
