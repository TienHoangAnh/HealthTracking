@extends('layout.layout')
@section('title', 'New Doctor')
@section('content')
<form action="/doctors" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-md-6">
            <div class="mb-3">
                <label for="name" class="form-label">Doctor Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Doctor Name">
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="photo" class="form-label">Doctor Image</label>
                <input type="file" class="form-control" id="photo" name="photo" placeholder="Doctor Name">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="mb-3">
                <label for="department" class="form-label">Department</label>
                <input type="text" class="form-control" id="department" name="department" placeholder="Department">
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="phone" class="form-label">Doctor Phone</label>
                <input type="text" class="form-control" id="phone" name="phone" placeholder="Doctor Phone">
            </div>
        </div>
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description of the doctor</label>
        <input style="height:100px" type="text" class="form-control" id="description" name="description" placeholder="Description">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
