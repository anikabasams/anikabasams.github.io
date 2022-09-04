<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable =[
        'id', 'satker_id', 'nama', 'nik', 'asal_kec', 'asal_des', 'nohp', 'email', 'npwp', 'norek', 'created_at', 'updated_at'
    ];

    public function task() {
        return $this->hasMany(Task::class, 'id', 'member_id');
    }

}
