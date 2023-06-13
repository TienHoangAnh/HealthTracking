@extends('layout.layout')
@section('title', 'New Doctor')
@section('content')
<form action="/doctors" method="post">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Doctor Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Doctor Name">
    </div>
    <div class="mb-3">
        <label for="department" class="form-label">Department</label>
        <input type="text" class="form-control" id="department" name="department" placeholder="Department">
    </div>
    <div class="mb-3">
        <label for="phone" class="form-label">Doctor Phone</label>
        <input type="text" class="form-control" id="phone" name="phone" placeholder="Doctor Phone">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection