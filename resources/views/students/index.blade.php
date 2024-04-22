@extends('layouts.app')

@section('title')

@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List of Student</h1>
        <a href="{{ route('students.create') }}" class="btn btn-primary"><i class="fas fa-user-plus"></i> Add Student</a>
    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>#</th>
                <th>Student ID</th>
                <th>Student Name</th>
                <th>Student Gender</th>
                <th>Student Address</th>
                <th>Student Course</th>
                <th>Student Section</th>
                <th>Student Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if($student->count() > 0)
                @foreach($student as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->studentId }}</td>
                        <td class="align-middle">{{ $rs->studentName }}</td>
                        <td class="align-middle">{{ $rs->studentGender }}</td>
                        <td class="align-middle">{{ $rs->studentAddress }}</td>
                        <td class="align-middle">{{ $rs->studentCourse }}</td>
                        <td class="align-middle">{{ $rs->studentSection }}</td>
                        <td class="align-middle">{{ $rs->studentStatus }}</td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a class="btn btn-success m-r-15 text-muted studentView" data-toggle="modal" data-idUpdate="'.$row->id.'" data-target="#studentView">
                                    <i class="fa fa-eye" style="color: black;"></i>
                                </a>
                                <a class="btn btn-info m-r-15 text-muted studentEdit" data-toggle="modal" data-idUpdate="'.$row->id.'" data-target="#studentUpdate">
                                    <i class="fa fa-edit" style="color: black;"></i>
                                </a>
                            <!-- <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('students.show', $rs->id) }}" type="button" class="btn btn-secondary">Detail</a>
                                <a href="{{ route('students.edit', $rs->id)}}" type="button" class="btn btn-warning">Edit</a> -->
                                <!-- <form action="{{ route('students.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0">Delete</button>
                                </form> -->
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="5">Student not found</td>
                </tr>
            @endif
        </tbody>
    </table>
    <script>
        // document.addEventListener('DOMContentLoaded', function () {
        //     var addStudentBtn = document.getElementById('addStudentBtn');
        //     var addStudentModal = new bootstrap.Modal(document.getElementById('addStudentModal'));

        //     addStudentBtn.addEventListener('click', function () {
        //         addStudentModal.show();
        //     });
        // });
    </script>
@endsection
