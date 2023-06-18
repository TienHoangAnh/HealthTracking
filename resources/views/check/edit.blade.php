@extends('layout.layout')
@section('title','Edit MedicalCheck')
@section('content')

<h1 style="text-align:center">@yield('title')</h1>
<div class="container">
  <div class="row">
    <div class="col-md-6 offset-md-3">
      <div class="edit-check-form">
        <form action="/checks/{{$check->id}}" method="post">
          {{ method_field('PUT') }}
          @csrf
          <div class="mb-3">
            <label for="date" class="form-label">Date</label>
            <input type="text" class="form-control" id="date" name="date" placeholder="Date" value="{{$check->date}}">
          </div>
          <div class="mb-3">
            <label for="address" class="form-label">Address Of Clinic</label>
            <input type="text" class="form-control" id="address" name="address" placeholder="Address Of Clinic" value="{{$check->address}}">
          </div>
          <div class="mb-3">
            <label for="department" class="form-label">Department</label>
            <select class="form-control" id="department" name="department">
              <option selected>Choose Department</option>
              @foreach($doctors as $doctor)
              <option value="{{$doctor->id}}">{{$doctor->department}}</option>
              @endforeach
            </select>
          </div>
          <div class="mb-3">
              <label for="doctor" class="form-label">Doctor</label>
              <select class="form-control" id="doctor" name="doctor">
                <option selected>Choose Doctor</option>
                @foreach($doctors as $doctor)
                <option value="{{$doctor->id }}">{{$doctor->name }}</option>
                @endforeach
              </select>
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