<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\StudentDataTemplateExport;

class StudentController extends Controller
{
    public function index()
    {
        return view('student.list');
    }

    public function studentDataTemplate()
    {
        return Excel::download(new StudentDataTemplateExport, 'student_data_template.xlsx');
    }
}
