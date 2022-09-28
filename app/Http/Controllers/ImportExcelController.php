<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\TaskImport;
use App\Models\Task;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class ImportExcelController extends Controller
{	
	
    public function import_excel(Request $request, $activity_id) 
	{
		
		// import data
		Excel::import(new TaskImport($activity_id), 'public/file_member/Book1.xlsx' );
		
 
		// alihkan halaman kembali
		return redirect()->route('daftar-kegiatan.index')->with('success', 'All good!');
	}
}
