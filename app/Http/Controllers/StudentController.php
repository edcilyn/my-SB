<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student; 
 
class StudentController extends Controller
{
    public function index()
    {
        $student = Student::orderBy('created_at', 'DESC')->get();

        return view('students.index', compact('student'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('students.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Student::create($request->all());
 
        return redirect()->route('students')->with('success', 'Student added successfully');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $student = Student::findOrFail($id);
  
        return view('students.show', compact('student'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $student = Student::findOrFail($id);
  
        return view('students.edit', compact('student'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $student = Student::findOrFail($id);
  
        $student->update($request->all());
  
        return redirect()->route('students')->with('success', 'Student updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $student = Student::findOrFail($id);
  
        $student->delete();
  
        return redirect()->route('students')->with('success', 'Student deleted successfully');
    }
}