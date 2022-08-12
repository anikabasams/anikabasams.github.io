<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    protected $fillable =[
        'id', 'kode_satker', 'nama_satker', 'honor_maks', 'created_at', 'updated_at'
    ];

}
