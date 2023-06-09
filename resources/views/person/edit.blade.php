@extends('layout.layout')
@section('title', 'Edit Person')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-6 offset-md-3">
      <div class="edit-person-form">
        <h2 class="text-center">Edit Person</h2>
        <form action="/people/{{$person->id}}" method="post">
            {{ method_field('PUT') }}
          @csrf
          <div class="mb-3">
            <label for="name" class="form-label">Person Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Person Name" value="{{$person->name}}">
          </div>
          <div class="mb-3">
            <label for="birth" class="form-label">Birth</label>
            <input type="text" class="form-control" id="birth" name="birth" placeholder="Birth" value="{{$person->birth}}">
          </div>
          <div class="mb-3">
            <label for="name" class="form-label">Address</label>
            <input type="text" class="form-control" id="address" name="address" placeholder="Address" value="{{$person->address}}">
          </div>
          <div class="mb-3">
            <label for="idcard" class="form-label">IDcard</label>
            <input type="text" class="form-control" id="idcard" name="idcard" placeholder="IDcard" value="{{$person->idcard}}">
          </div>
          <div class="mb-3">
            <label for="phone" class="form-label">Phone</label>
            <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone" value="{{$person->phone}}">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="Email" value="{{$person->email}}">
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
