<!-- //resources/views/instructors/edit.blade.php -->
@extends('layouts.app')

@section('title')

@section('contents')
    <h1 class="mb-0">Edit Instructor Details</h1>
    <hr />
    <form action="{{ route('instructors.update', $instructor->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Instructor ID</label>
                <input type="text" name="instructorId" class="form-control" placeholder="Instructor ID" value="{{ $instructor->instructorId }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Instructor Name</label>
                <input type="text" name="instructorName" class="form-control" placeholder="Instructor Name" value="{{ $instructor->instructorName }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Instructor Gender</label>
                <input type="text" name="instructorGender" class="form-control" placeholder="Instructor Gender" value="{{ $instructor->instructorGender }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Instructor Address</label>
                <input type="text" name="instructorAddress" class="form-control" placeholder="Instructor Address" value="{{ $instructor->instructorAddress }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Instructor Status</label>
                <input type="text" class="form-control" name="instructorStatus" placeholder="Instructor Status" value="{{ $instructor->instructorStatus }}" >
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection
