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
        $member = DB::table('member')->pluck('id', 'nik');
        $nik = $row[1];

        if($member['nik'] = $nik)(
            return new Task([
                $member['id'] => 
                'jabatan' => $row[2],
                'harga' => $row[3], 
                'beban' => $row[4],
            ]);
        )

        
    }
}
