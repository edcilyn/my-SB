@extends('layouts.app')
  
@section('title')
  
@section('contents')
    <h1 class="mb-0">Edit Course Detail</h1>
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
                <label class="form-label">Price</label>
                <input type="text" name="price" class="form-control" placeholder="Price" value="{{ $product->price }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Product Code</label>
                <input type="text" name="product_code" class="form-control" placeholder="Product Code" value="{{ $product->product_code }}" >
            </div> -->
            <div class="col mb-3">
                <label class="form-label">Description</label>
                <textarea class="form-control" name="courseDescription" placeholder="Description" >{{ $course->courseDescription }}</textarea>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection