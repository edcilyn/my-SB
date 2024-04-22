<!-- //resources/views/students/show.blade.php -->
@extends('layouts.app')

@section('title')

@section('contents')
    <h1 class="mb-0">Instructor Details</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Instructor ID</label>
            <input type="text" name="instructorId" class="form-control" placeholder="Instructor ID" value="{{ $instructor->instructorId }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Instructor Name</label>
            <input type="text" name="instructorName" class="form-control" placeholder="Instructor Name" value="{{ $instructor->fullName }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Instructor Gender</label>
            <input type="text" name="instructorGender" class="form-control" placeholder="Instructor Gender" value="{{ $instructor->gender }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Instructor Address</label>
            <input type="text" name="instructorAddress" class="form-control" placeholder="Instructor Address" value="{{ $instructor->age }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Instructor Status</label>
            <input type="text" class="form-control" name="instructorStatus" placeholder="Instructor Stats" value="{{ $instructor->phoneNo }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $instructor->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $instructor->updated_at }}" readonly>
        </div>
    </div>
@endsection
