<?php

namespace App\Imports;

use App\Models\Task;
use App\Models\Member;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ToModel;

class TaskImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        /*$nik = '123456';
        $member = DB::table('members')
            ->where('nik', $nik)
            ->value('id');*/

        return new Task([
            'member_id' => $row[0],
            'activity_id' => $row[1],
            'jabatan' => $row[2],
            'harga' => $row[3], 
            'beban' => $row[4],
        ]);
    }
}
