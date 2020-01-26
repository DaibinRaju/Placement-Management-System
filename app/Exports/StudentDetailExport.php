<?php

namespace App\Exports;

use App\StudentDetail;
use Maatwebsite\Excel\Concerns\FromCollection;

class StudentDetailExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return StudentDetail::all();
    }
}
