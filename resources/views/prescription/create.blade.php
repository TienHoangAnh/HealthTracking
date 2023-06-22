@extends('layout.layout')
@section('title', 'Create new prescription')
@section('content')

<h1 style="text-align: center">@yield('title')</h1>
<form action="/prescriptions" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-md-6">
            <div class="mb-3">
                <label for="people" class="form-label">Person</label>
                <select class="form-control" id="people" name="people[]">
                  <option selected>Choose Person</option>
                  @foreach($people as $person)
                  <option value="{{ $person->id }}">{{ $person->name }}</option>
                  @endforeach
                </select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="name" class="form-label">Name Prescription</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Name Prescription">
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="amount" class="form-label">Amount Prescription</label>
                <input type="text" class="form-control" id="amount" name="amount" placeholder="Amount Prescription">
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="using" class="form-label">Using Prescription</label>
                <input type="text" class="form-control" id="using" name="using" placeholder="Using Prescription">
            </div>
        </div>
    </div>    
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection

