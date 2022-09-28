<?php

namespace App\Imports;

use App\Models\Task;
use App\Models\Member;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class TaskImport implements ToCollection
{
    public function  __construct($activity_id)
    {
        $this->activity_id = $activity_id;
    }
    public function collection(Collection $rows)
    {
        foreach ($rows as $row) 
        {
            Task::create([
                'member_id' => $row[0],
                'activity_id' => $this->activity_id,
                'jabatan' => $row[2],
                'harga' => $row[3], 
                'beban' => $row[4],
            ]);
        }
    }
}
/*
class TaskImport implements ToModel
{
    public function  __construct($activity_id)
    {
        $this->activity_id = $activity_id;
    }
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    //
    public function model(array $row)
    {
        /*$nik = '123456';
        $member = DB::table('members')
            ->where('nik', $nik)
            ->value('id');//

        return new Task([
            'member_id' => $row[0],
            'activity_id' => $this->activity_id,
            'jabatan' => $row[2],
            'harga' => $row[3], 
            'beban' => $row[4],
        ]);
    }
}
*/
