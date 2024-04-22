@extends('layouts.app')

@section('title')

@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List of Instructor</h1>
        <a href="{{ route('instructors.create') }}" class="btn btn-primary">Add Instructor</a>
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
                <th>Instructor ID</th>
                <th>Instructor Name</th>
                <th>Instructor Gender</th>
                <th>Instructor Address</th>
                <th>Instructor Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if($instructor->count() > 0)
                @foreach($instructor as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->instructorId }}</td>
                        <td class="align-middle">{{ $rs->instructorName }}</td>
                        <td class="align-middle">{{ $rs->instructorGender }}</td>
                        <td class="align-middle">{{ $rs->instructorAddress }}</td>
                        <td class="align-middle">{{ $rs->instructorStatus }}</td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('instructors.show', $rs->id) }}" type="button" class="btn btn-secondary">Detail</a>
                                <a href="{{ route('instructors.edit', $rs->id)}}" type="button" class="btn btn-warning">Edit</a>
                                <!-- <form action="{{ route('instructors.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
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
                    <td class="text-center" colspan="5">Instructor not found</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection
