@extends('layout.layout')
@section('title', 'Doctor Details')
@section('content')
<style>
  .doctor-details {
    background-color: #f8f9fa;
    padding: 50px 0;
  }

  .doctor-info {
    padding: 20px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
  }

  .doctor-name {
    font-size: 24px;
    font-weight: bold;
    color: #333;
    margin-bottom: 10px;
  }
  .doctor-phone {
    font-size: 16px;
    color: #282727;
    margin-bottom: 15px;
  }

  .doctor-department {
    font-size: 16px;
    color: #3e3d3d;
    margin-bottom: 15px;
  }

  .doctor-description {
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

  .doctor-image {
    border-radius: 5px;
    overflow: hidden;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
    max-width: 300px; /* Kích thước cố định cho khung ảnh */
    margin-right: 20px; /* Khoảng cách giữa khung ảnh và thông tin bác sĩ */
  }

  .doctor-image img {
    width: 100%;
    height: auto;
  }
</style>
<h1 style="text-align:center;">@yield('title')</h1>
<section class="doctor-details">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="doctor-image">
          <img src="{{url("/upload/".$doctor->photo)}}" class="img-fluid rounded-top" alt="Doctor Image">
        </div>
      </div>
      <div class="col-md-8">
        <div class="doctor-info">
          <h2 class="doctor-name">Doctor {{$doctor->name}}</h2>
          <p class="doctor-department">Department: {{$doctor->department}}</p>
          <p class="doctor-phone">Phone: {{$doctor->phone}}</p>
          <p class="doctor-description">Description: {{$doctor->description}}</p>
          <a href="{{url("/doctors/".$doctor->id."/edit")}}" class="btn btn-primary btn-edit">Edit</a>
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
