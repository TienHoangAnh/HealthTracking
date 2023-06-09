@extends('layout.layout')
@section('title', 'Edit Doctor')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-6 offset-md-3">
      <div class="edit-doctor-form">
        <h2 class="text-center">Edit Doctor</h2>
        <form action="/doctors/{{$doctor->id}}" method="post" enctype="multipart/form-data">
          {{ method_field('PUT') }}
          @csrf
          <div class="mb-3">
            <label for="name" class="form-label">Doctor Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Doctor Name" value="{{$doctor->name}}">
          </div>
          <div class="mb-3">
            <label for="department" class="form-label">Department</label>
            <input type="text" class="form-control" id="department" name="department" placeholder="Department" value="{{$doctor->department}}">
          </div>
          <div class="mb-3">
            <label for="phone" class="form-label">Doctor Phone</label>
            <input type="text" class="form-control" id="phone" name="phone" placeholder="Doctor Phone" value="{{$doctor->phone}}">
          </div>
          <div class="mb-3">
            <label for="description" class="form-label">Description of Doctor</label>
            <input type="text" class="form-control" id="description" name="description" placeholder="Description" value="{{$doctor->description}}">
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
