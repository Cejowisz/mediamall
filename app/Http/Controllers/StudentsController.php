<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function create()
    {
        return view('students.register');
    }


    // Stores Students
    public function store(Request $request)
    {
        // validate the input field
        $this->validate($request, [
            'last_name'         =>  'required|max:255',
            'first_name'        =>  'required|max:255',
            'email'             =>  'unique:students,email',
            'phone'             =>  'required|integer',
            'program'           =>  'required|max:255',
            'duration'          =>  'required|max:255',
            'gender'            =>  'required',
            'age'               =>  'required'
        ]);

        $student = new Student;

        $student->last_name     = $request->last_name;
        $student->first_name     = $request->first_name;
        $student->email     = $request->email;
        $student->phone     = $request->phone;
        $student->program     = $request->program;
        $student->duration     = $request->email;
        $student->gender     = $request->phone;
        $student->age     = $request->program;



        $student->save();
    }
}
