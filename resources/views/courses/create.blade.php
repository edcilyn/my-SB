@extends('layouts.app')
  
@section('title')
  
@section('contents')
    <h1 class="mb-0">Add New Course</h1>
    <hr />
    <form action="{{ route('courses.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="courseName" class="form-control" placeholder="Course Name">
            </div>
            <!-- <div class="col">
                <input type="text" name="gender" class="form-control" placeholder="Gender">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="number" name="age" class="form-control" placeholder="Age">
            </div> -->
            <div class="col">
                <textarea class="form-control" name="courseDescription" placeholder="Course Description"></textarea>
            </div>
        </div>
 
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection