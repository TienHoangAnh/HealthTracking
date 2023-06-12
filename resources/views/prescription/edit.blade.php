@extends('layout.layout')
@section('title', 'Edit Prescription')
@section('content')

<h2>@yield('title')</h2>

<form action="/prescriptions/{{$prescription->id}}" method="post">
    {{ method_field('PUT')}}
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Name Prescription</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Name Prescription" value="{{$prescription->name}}">
    </div>
    <div class="mb-3">
        <label for="amount" class="form-label">Amount Prescription</label>
        <input type="text" class="form-control" id="amount" name="amount" placeholder="Amount Prescription" value="{{$prescription->amount}}">
    </div>
    <div class="mb-3">
        <label for="using" class="form-label">Using Prescription</label>
        <input type="text" class="form-control" id="using" name="using" placeholder="Using Prescription" value="{{$prescription->using}}">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  


@endsection