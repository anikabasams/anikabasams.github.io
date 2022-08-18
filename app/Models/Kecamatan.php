<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    use HasFactory;

    protected $fillable =[
        'id', 'satker_id', 'kode_kec', 'nama_kec', 'created_at', 'updated_at'
    ];

    public $timestamps = false;
}
