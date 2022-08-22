<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    protected $fillable =[
        'id', 'satker_id', 'judul', 'mulai', 'selesai', 'satuan', 'created_at', 'updated_at'
    ];
}
