<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable =[
        'id', 'member_id', 'activity_id', 'jabatan', 'harga', 'beban', 'total', 'created_at', 'updated_at'
    ];
}
