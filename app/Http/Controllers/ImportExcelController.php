<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\TaskImport;
use App\Models\Task;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class ImportExcelController extends Controller
{	
	
    public function import_excel(Request $request) 
	{
		$path1 = $request->file('file')->store('file_member'); 
		$path = storage_path('app').'/'.$path1; 
		// import data
		Excel::import(new TaskImport, $path);
		
 
		// alihkan halaman kembali
		return redirect()->route('daftar-kegiatan.index')->with('success', 'All good!');
	}
}
