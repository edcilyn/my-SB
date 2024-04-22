<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Instructor;


class InstructorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $instructor = Instructor::orderBy('created_at', 'DESC')->get();
  
        return view('instructors.index', compact('instructor'));
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('instructors.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Instructor::create($request->all());
 
        return redirect()->route('instructors')->with('success', 'instructor added successfully');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $instructor = Instructor::findOrFail($id);
  
        return view('instructors.show', compact('instructor'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $instructor = Instructor::findOrFail($id);
  
        return view('instructors.edit', compact('instructor'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $instructor = Instructor::findOrFail($id);
  
        $instructor->update($request->all());
  
        return redirect()->route('instructors')->with('success', 'Instructor updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $instructor = Instructor::findOrFail($id);
  
        $instructor->delete();
  
        return redirect()->route('instructors')->with('success', 'Instructor deleted successfully');
    }
}
