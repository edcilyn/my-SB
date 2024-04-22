<!-- //resources/views/students/edit.blade.php -->
@extends('layouts.app')

@section('title')

@section('contents')
    <h1 class="mb-0">Edit Student Details</h1>
    <hr />
    <form action="{{ route('students.update', $student->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
        <div class="col mb-3">
                <label class="form-label">Student ID</label>
                <input type="text" name="studentId" class="form-control" placeholder="Student ID" value="{{ $student->studentId }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Student Name</label>
                <input type="text" name="studentName" class="form-control" placeholder="Student Name" value="{{ $student->studentName }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Student Gender</label>
                <input type="text" name="studentGender" class="form-control" placeholder="Student Gender" value="{{ $student->studentGender }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Student Address</label>
                <input type="text" name="studentAddress" class="form-control" placeholder="Student Address" value="{{ $student->studentAddress }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Student Course</label>
                <input type="text" name="studentCourse" class="form-control" placeholder="Student Course" value="{{ $student->studentCourse }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Student Section</label>
                <input type="text" name="studentSection" class="form-control" placeholder="Student Section" value="{{ $student->studentSection }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Student Status</label>
                <input type="text" name="studentStatus" class="form-control" placeholder="Student Status" value="{{ $student->studentStatus }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <button class="btn btn-warning">Update</button>
                <!-- <a href="" type="button" class="btn btn-secondary">Cancel</a> -->
            </div>
        </div>
    </form>
@endsection
