<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Activity;
use App\Models\member;

class Task extends Model
{
    use HasFactory;

    protected $fillable =[
        'id', 'member_id', 'activity_id', 'jabatan', 'harga', 'beban', 'total', 'created_at', 'updated_at'
    ];

    public function activity() {
        return $this->belongsTo(Activity::class, 'id', 'activity_id');
    }

    public function member() {
        return $this->belongsTo(Member::class, 'id', 'member_id');
    }
}
