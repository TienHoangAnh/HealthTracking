@extends('layout.layout')
@section('title', 'New Person')
@section('content')
<form action="/people" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-md-6">
            <div class="mb-3">
                <label for="name" class="form-label">Person Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Person Name">
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="birth" class="form-label">Birth</label>
                <input type="text" class="form-control" id="birth" name="birth" placeholder="Birth">
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Email">
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="idcard" class="form-label">IDcard</label>
                <input type="text" class="form-control" id="idcard" name="idcard" placeholder="IDcard">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="mb-3">
                <label for="birth" class="form-label">Address</label>
                <input type="text" class="form-control" id="address" name="address" placeholder="Address">
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone">
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
