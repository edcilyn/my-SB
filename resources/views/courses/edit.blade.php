<!-- //resources/views/instructors/edit.blade.php -->
@extends('layouts.app')
  
@section('title')
  
@section('contents')
    <h1 class="mb-0">Edit Course Details</h1>
    <hr />
    <form action="{{ route('courses.update', $course->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Course Name</label>
                <input type="text" name="courseName" class="form-control" placeholder="Course Name" value="{{ $course->courseName }}" >
            </div>
            <!-- <div class="col mb-3">
                <label class="form-label">Gender</label>
                <input type="text" name="gender" class="form-control" placeholder="Gender" value="{{ $instructor->gender }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Age</label>
                <input type="text" name="age" class="form-control" placeholder="Age" value="{{ $instructor->age }}" >
            </div> -->
            <div class="col mb-3">
                <label class="form-label">Course Description</label>
                <input class="form-control" name="courseDescription" placeholder="Course Description" value="{{ $course->courseDescription }}" >
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection