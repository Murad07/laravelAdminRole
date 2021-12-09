<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\StudentImport;
use Maatwebsite\Excel\Facades\Excel;

class StudentController extends Controller
{
    //
    public function importForm() {
        return view('import-form');
    }

    public function import(Request $request) {
        Excel::import(new StudentImport, $request->file);
        return "Record are imported successfully";
    }
}
