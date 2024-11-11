<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    // Display a listing of the students
    public function index()
    {
        $students = Student::all(); // Fetch all students
        return view('backend.students.index', compact('students'));
    }

    // Show the form for creating a new student
    public function create()
    {
        return view('backend.students.create');
    }

    // Store a newly created student in storage
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'reg_no'=>'required|string|max:255',
            'email' => 'required|email|unique:students,email',
            'phone_number' => 'required|numeric',
            'course_enrolled' => 'required|string|max:255',
        ]);

        Student::create($validated); // Create the student record
        return redirect()->route('student.index')->with('success', 'Student created successfully!');
    }

    // Display the specified student
    public function show($id)
    {
        // $student = Student::findOrFail($id); // Fetch student by ID
        // return view('students.show', compact('student'));
    }

    // Show the form for editing the specified student
    public function edit($id)
    {
        $student = Student::findOrFail($id); // Fetch student by ID
        return view('backend.students.edit', compact('student'));



    }

    // Update the specified student in storage
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'reg_no'=>'required|string|max:255',
            'email' => 'required|email|unique:students,email,' . $id,
            'phone_number' => 'required|numeric',
            'course_enrolled' => 'required|string|max:255',
        ]);

        $student = Student::findOrFail($id);
        $student->update($validated); // Update the student record
        return redirect()->route('student.index')->with('success', 'Student updated successfully!');
    }

    // Remove the specified student from storage
    public function destroy($id)
    {
        $student = Student::findOrFail($id);
        $student->delete(); // Delete the student record
        return redirect()->route('student.index')->with('success', 'Student deleted successfully!');
    }
}
