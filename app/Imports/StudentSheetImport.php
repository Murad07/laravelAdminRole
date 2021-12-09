<?php

namespace App\Imports;

use App\Models\Student;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\withHeadingRow;

class StudentSheetImport implements ToModel, withHeadingRow
{
    public function model(array $row)
    {
        
        return new Student([
            'name'=> $row['name'],
            'email'=> $row['email'],
            'age'=> $row['age'],
            'university'=> $row['university'],
        ]);
    }
}
