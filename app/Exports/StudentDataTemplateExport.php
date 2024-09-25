<?php

namespace App\Exports;

use App\Models\Student;
use Maatwebsite\Excel\Concerns\WithHeadings;

class StudentDataTemplateExport implements WithHeadings
{
    public function headings(): array
    {
        return [
           ['Name', 'Class', 'Level', 'Parent Contact No'],
           ['Iskandar Isman', '3', 'Kasturi', '0123456789'],
        ];
    }
}
