<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function show()
    {
        $students = Student::all();

        return view('student', compact('students'));
    }

    public function insert_student(Request $request)
    {
        // dd($request);
        $students = new Student;

        $students->name = $request->name;
        $students->gender = $request->gender;
        $students->age = $request->age;
        $students->address = $request->address;

        $students->save();
        return redirect()->route('student_show');
    }

    public function detail_student($id)
    {
        $students = Student::find($id);

        return view('detail_student', compact('students'));
    }

    public function edit_student($id)
    {
        $students = Student::find($id);

        return view('edit_student', compact('students'));
    }

    public function update_student(Request $request, $id)
    {
        // dd($request);
        $students = Student::find($id);

        $students->name = $request->name;
        $students->gender = $request->gender;
        $students->age = $request->age;
        $students->address = $request->address;

        $students->save();
        return redirect()->route('student_show');
    }

    public function delete_student($id)
    {
        $students = Student::find($id);

        $students->delete();

        return redirect()->route('student_show');
    }
}
