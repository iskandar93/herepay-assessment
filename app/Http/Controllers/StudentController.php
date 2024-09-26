<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Imports\StudentsImport;
use App\Http\Requests\UploadRequest;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\StudentDataTemplateExport;

class StudentController extends Controller
{
    public function index(Request $request)
    {
        $query = Student::query();

        $students = $query->paginate(10);

        return view('student.list', compact('students'));
    }

    public function studentDataTemplate()
    {
        return Excel::download(new StudentDataTemplateExport, 'student_data_template.xlsx');
    }

    public function upload(UploadRequest $request)
    {
        Excel::import(new StudentsImport, $request->file('file'));

        return redirect()->route('student.list')->with([
            'status' => __('success.success_import'),
            'alert-type' => 'alert-success',
        ]);
    }
}
