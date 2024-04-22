@extends('layouts.app')

@section('title')

@section('contents')
    <h1 class="mb-0">Add New Instructor</h1>
    <hr />
    <form action="{{ route('instructors.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="instructorId" class="form-control" placeholder="Instructor ID">
            </div>
            <div class="col">
                <input type="text" name="instructorName" class="form-control" placeholder="Instructor Name">
            </div>
            <div class="col">
                <select name="instructorGender" class="form-control">
                    <option value="select">--Select Gender--</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="instructorAddress" class="form-control" placeholder="Instructor Address">
            </div>
            <div class="col">
                <select name="instructorStatus" class="form-control">
                    <option value="select">--Select Status--</option>
                    <option value="Active">Active</option>
                    <option value="Inactive">Inactive</option>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection
