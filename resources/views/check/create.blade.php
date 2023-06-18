@extends('layout.layout')
@section('title','Create New MedicalCheck')
@section('content')

<h1 style="text-align: center">@yield('title')</h1>

<form action="/checks" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-md-6">
            <div class="mb-3">
                <label for="date" class="form-label">Date</label>
                <input type="text" class="form-control" id="date" name="date" placeholder="Date">
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="address" class="form-label">Address Of Clinic</label>
                <input type="text" class="form-control" id="address" name="address" placeholder="Address Of Clinic">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="mb-3">
                <label for="department" class="form-label">Department</label>
                <select class="form-control" id="department" name="department">
                  <option selected>Choose Department</option>
                  @foreach($doctors as $doctor)
                  <option value="{{ $doctor->id }}">{{ $doctor->department }}</option>
                  @endforeach
                </select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="doctor" class="form-label">Doctor</label>
                <select class="form-control" id="doctor" name="doctor">
                  <option selected>Choose Doctor</option>
                  @foreach($doctors as $doctor)
                  <option value="{{ $doctor->id }}">{{ $doctor->name }}</option>
                  @endforeach
                </select>
            </div>
        </div>
    </div>
   
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
