<?php

namespace App\Imports;

use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class StudentImport implements WithMultipleSheets
{
    public function sheets(): array
    {
        return [
            'student' => new StudentSheetImport(),
            'company' => new CompanySheetImport(),
        ];
    }
}
