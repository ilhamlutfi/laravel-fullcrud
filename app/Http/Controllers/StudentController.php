<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentRequest;
use App\Models\Student;

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
    public function store(StudentRequest $request)
    {
        $request->validate();

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

    // delete data
    public function destroy($id)
    {
        Student::find($id)->delete();
        return back()->with('success', 'Student has been deleted');
    }

    // update data
    public function update(Student $student, StudentRequest $request)
    {
        $request->validate();

        Student::find($student->id)->update($request->all());
        return back()->with('success', 'Student ' . $request->name . ' has been updated');
    }
}
