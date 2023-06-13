@extends('layout.layout')
@section('title', 'Edit Doctor')
@section('content')
<form action="/doctors/{{$doctor->id}}" method="post">
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
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection