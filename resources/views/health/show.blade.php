@extends('layout.layout')
@section('title', 'Health Details')
@section('content')
<style>
  .health-details {
    background-color: #f8f9fa;
    padding: 50px 0;
  }

  .health-info {
    padding: 20px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
  }

  .health-name {
    font-size: 24px;
    font-weight: bold;
    color: #333;
    margin-bottom: 10px;
  }

  .health-weight {
    font-size: 16px;
    color: #666;
    margin-bottom: 15px;
  }

  .health-height {
    font-size: 16px;
    color: #444;
    margin-bottom: 20px;
  }

  .btn-edit {
    margin-right: 10px;
    font-size: 16px;
    font-weight: bold;
    background-color: #007bff;
    border-color: #007bff;
  }

  .btn-danger {
    font-size: 16px;
    font-weight: bold;
    background-color: #dc3545;
    border-color: #dc3545;
  }

  .btn-edit:hover,
  .btn-danger:hover {
    background-color: #0069d9;
    border-color: #0062cc;
  }

</style>
<h1 style="text-align:center;">@yield('title')</h1>
<section class="health-details">
  <div class="container">
    <div class="row">
      <div style="margin-left: 200px;" class="col-md-8">
        <div class="health-info">
          <h2 class="health-name">Name: {{$health->person->name}}</h2>
          <p class="health-weight">Weight: {{$health->weight}}</p>
          <p class="health-height">Height: {{$health->height}}</p>
          <p class="health-phone">Phone of person: {{$health->person->phone}}</p>
          <p class="health-symptom">Symptom: {{$health->symptom}}</p>
          <a href="{{url("/healths/".$health->id."/edit")}}" class="btn btn-primary btn-edit">Edit</a>
          <form action="#" method="post" class="d-inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete?')">Delete</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
