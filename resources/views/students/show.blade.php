<!-- //resources/views/students/show.blade.php -->
@extends('layouts.app')

@section('title')

@section('contents')
    <h1 class="mb-0">Detail Student</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Student ID</label>
            <input type="text" name="studentId" class="form-control" placeholder="Student ID" value="{{ $student->studentId }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Student Name</label>
            <input type="text" name="fullName" class="form-control" placeholder="Student Name" value="{{ $student->studentName }}" readonly>
        </div>
    </div>

    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Student Gender</label>
            <input type="text" name="studentGender" class="form-control" placeholder="Student Gender" value="{{ $student->studentGender }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Student Address</label>
            <input type="text" name="studentAddress" class="form-control" placeholder="Student Address" value="{{ $student->studentAddress }}" readonly>
        </div>
    </div>

    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Student Course</label>
            <input type="text" name="studentCourse" class="form-control" placeholder="Student Course" value="{{ $student->studentCourse }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Student Section</label>
            <input type="text" name="studentSection" class="form-control" placeholder="Student Section" value="{{ $student->studentSection }}" readonly>
        </div>
        <div class="col mb-3">
        <label class="form-label">Student Status</label>
            <input type="text" name="studentStatus" class="form-control" placeholder="Student Status" value="{{ $student->studentStatus }}" readonly>
        </div>
    </div>

    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $student->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $student->updated_at }}" readonly>
        </div>
    </div>
@endsection
