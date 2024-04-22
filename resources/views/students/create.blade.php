@extends('layouts.app')

@section('title')

@section('contents')
    <h1 class="mb-0">Add New Student</h1>
    <hr />
    <form action="{{route('students.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('post')
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="studentId" class="form-control" placeholder="Student ID" required>
            </div>
            <div class="col">
                <input type="text" name="studentName" class="form-control" placeholder="Student Name" required>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col">
                <select name="studentGender" class="form-control">
                    <option value="select">--Select Gender--</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>
            <div class="col">
                <input type="text" name="studentAddress" class="form-control" placeholder="Student Address" required>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col">
                <input type="text" name="studentCourse" class="form-control" placeholder="Student Course" required>
            </div>
            <div class="col">
                <input type="text" name="studentSection" class="form-control" placeholder="Student Section" required>
            </div>
            <div class="col">
                <select name="studentStatus" class="form-control">
                    <option value="select">--Select Status--</option>
                    <option value="Enrolled">Enrolled</option>
                    <option value="Pending">Pending</option>
                    <option value="Irregular">Irregular</option>
                </select>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col">
                <!-- <button href="#" class="btn btn-primary" >Cancel</button> -->
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection
