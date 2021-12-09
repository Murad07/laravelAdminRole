<?php

namespace App\Imports;

use App\Models\Company;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\withHeadingRow;

class CompanySheetImport implements ToModel, withHeadingRow
{
    
    public function model(array $row)
    {
        
        return new Company([
            'name'=> $row['name'],
            'address'=> $row['address'],
            'employee_id'=> $row['employee_id'],
        ]);
    }
}
