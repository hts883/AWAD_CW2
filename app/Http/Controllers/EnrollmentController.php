<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enrollment;
class EnrollmentController extends Controller
{

    // Display a listing of the students
    public function index()
    {
        $enrollments = Enrollment::all(); // Assuming you're working with enrollments

        return view('backend.enrollments.index', compact('enrollments'));
    }

// Show the form for creating a new student
    public function create()
    {
        return view('backend.enrollments.create');
    }

    // Store a newly created student in storage
    public function store(Request $request)
    {
        $validated = $request->validate([
            'course' => 'required|string|max:255',
            'date'=>'required|string|max:255',
            'student_id' => 'required|string',
            'status' => 'required|string',
            'semester' => 'required|string|max:255',
            
        ]);

        Enrollment::create($validated); // Create the student record
        return redirect()->route('enrollments.index')->with('success', 'Student enrolled successfully!');
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
        $enrollment = Enrollment::findOrFail($id); // Fetch student by ID
        return view('backend.enrollments.edit', compact('enrollment'));



    }

    // Update the specified student in storage
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
          'course' => 'required|string|max:255',
            'date'=>'required|string|max:255',
            'student_id' => 'required|string|unique:students,email',
            'status' => 'required|string',
            'semester' => 'required|string|max:255',
        ]);

        $enrollment = Enrollment::findOrFail($id);
        $enrollment->update($validated); // Update the student record
        return redirect()->route('enrollment.index')->with('success', 'Enrollment updated successfully!');
    }

    // Remove the specified student from storage
    public function destroy($id)
    {
        $enrollment = Student::findOrFail($id);
        $enrollment->delete(); // Delete the student record
        return redirect()->route('enrollments.index')->with('success', 'enrollment deleted successfully!');
    }
}


