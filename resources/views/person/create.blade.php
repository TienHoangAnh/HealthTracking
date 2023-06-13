@extends('layout.layout')
@section('title', 'New Person')
@section('content')
<form action="/people" method="post">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Person Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Person Name">
    </div>
    <div class="mb-3">
        <label for="birth" class="form-label">Birth</label>
        <input type="text" class="form-control" id="birth" name="birth" placeholder="Birth">
    </div>
    <div class="mb-3">
        <label for="birth" class="form-label">Address</label>
        <input type="text" class="form-control" id="address" name="address" placeholder="Address">
    </div>
    <div class="mb-3">
        <label for="idcard" class="form-label">IDcard</label>
        <input type="text" class="form-control" id="idcard" name="idcard" placeholder="IDcard">
    </div>
    <div class="mb-3">
        <label for="phone" class="form-label">Phone</label>
        <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="text" class="form-control" id="email" name="email" placeholder="Email">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
