@extends('layout.layout')
@section('title', 'New Health Information')
@section('content')
<style>
  .form-label {
    font-weight: bold;
    color: #333;
  }

  .form-control {
    border-radius: 5px;
  }

  .btn-primary {
    font-size: 16px;
    font-weight: bold;
    background-color: #007bff;
    border-color: #007bff;
  }

  .btn-primary:hover {
    background-color: #0069d9;
    border-color: #0062cc;
  }

  .mb-3 {
    margin-bottom: 20px;
  }
</style>
<h1 style="text-align:center;">@yield('title')</h1>
<form action="/healths" method="post">
    @csrf
    <div class="row">
        <div class="col-md-6">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <select name="person" id="person" class="form-control">
                  @foreach($person as $person)
                  <option value="{{$person->id}}">{{$person->name}}</option>
                  @endforeach
                </select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="weight" class="form-label">Weight (kg)</label>
                <input type="number" class="form-control" id="weight" name="weight" placeholder="Weight">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="mb-3">
                <label for="height" class="form-label">Height (cm)</label>
                <input type="number" class="form-control" id="height" name="height" placeholder="Height">
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="symptom" class="form-label">Symptom</label>
                <input type="text" class="form-control" id="symptom" name="symptom" placeholder="Symptom">
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
