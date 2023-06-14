@extends('layout.layout')
@section('title','Create New MedicalCheck')
@section('content')

<h2>@yield('title')</h2>

<form action="/checks" method="post">
    @csrf
    <div class="mb-3">
        <label for="date" class="form-label">Date</label>
        <input type="text" class="form-control" id="date" name="date" placeholder="Date">
    </div>
    <div class="mb-3">
        <label for="address" class="form-label">Address Of Clinic</label>
        <input type="text" class="form-control" id="address" name="address" placeholder="Address Of Clinic">
    </div>
    <div class="mb-3">
        <label for="department" class="form-label">Department</label>
        <input type="text" class="form-control" id="department" name="department" placeholder="Department">
    </div>
    <div class="mb-3">
        <label for="doctor" class="form-label">Doctor</label>
        <select class="form-control" id="doctor" name="doctor">
          <option selected>Choose Doctor</option>
          @foreach($doctors as $doctor)
          <option value="{{ $doctor->id }}">{{ $doctor->name }}</option>
          @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection