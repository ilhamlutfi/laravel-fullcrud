<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    // select all data
    public function index()
    {
        return view('student.index', [
            'students' => Student::all()
        ]);
    }

    // insert data
    public function store(Request $request)
    {
        Student::create($request->all());
        return back()->with('success', 'Student ' . $request->name . ' has been created');
    }

    // show detail data
    public function show(Student $student)
    {
        return view('student.show', [
            'student' => $student
        ]);
    }
}
