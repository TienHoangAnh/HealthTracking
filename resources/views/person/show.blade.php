@extends('layout.layout')
@section('title', 'Person Details')
@section('content')
<style>
  .person-details {
    background-color: #f8f9fa;
    padding: 50px 0;
  }

  .person-info {
    padding: 20px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
  }

  .person-name {
    font-size: 24px;
    font-weight: bold;
    color: #333;
    margin-bottom: 10px;
  }

  .person-birth {
    font-size: 16px;
    color: #666;
    margin-bottom: 15px;
  }

  .person-idcard {
    font-size: 16px;
    color: #444;
    margin-bottom: 20px;
  }
  .person-address {
    font-size: 16px;
    color: #444;
    margin-bottom: 20px;
  }
  .person-phone {
    font-size: 16px;
    color: #444;
    margin-bottom: 20px;
  }
  .person-email {
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

  .person-image {
    border-radius: 5px;
    overflow: hidden;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
    max-width: 300px; /* Kích thước cố định cho khung ảnh */
    margin-right: 20px; /* Khoảng cách giữa khung ảnh và thông tin bác sĩ */
  }

  .person-image img {
    width: 100%;
    height: auto;
  }
</style>
<h1 style="text-align:center;">@yield('title')</h1>
<section class="person-details">
  <div class="container">
    <div class="row">
      <div class="col-md-2">

      </div>
      <div class="col-md-8">
        <div class="person-info">
          <h2 class="person-name">Person Name: {{$person->name}}</h2>
          <p class="person-birth">Birth: {{$person->birth}}</p>
          <p class="person-idcard">IDcard: {{$person->idcard}}</p>
          <p class="person-address">Address: {{$person->address}}</p>
          <p class="person-phone">Phone: {{$person->phone}}</p>
          <p class="person-email">Email: {{$person->email}}</p>

          <a href="{{url("/people/".$person->id."/edit")}}" class="btn btn-primary btn-edit">Edit</a>
          <form action="#" method="post" class="d-inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete?')">Delete</button>
          </form>
        </div>
      </div>
      <div class="col-md-2">

      </div>
    </div>
  </div>
</section>
@endsection
