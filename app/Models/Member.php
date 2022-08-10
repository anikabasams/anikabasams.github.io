<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable =[
        'id', 'desa_id', 'nama', 'nik', 'nohp', 'email', 'npwp', 'norek'
    ];

    public $timestamps = false;
}
