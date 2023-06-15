@extends('layout.layout')
@section('title', 'Create new prescription')
@section('content')

<h2>@yield('title')</h2>

<form method="post" action='/prescriptions'>
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Name Prescription</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Name Prescription">
    </div>
    <div class="mb-3">
        <label for="amount" class="form-label">Amount Prescription</label>
        <input type="text" class="form-control" id="amount" name="amount" placeholder="Amount Prescription">
    </div>
    <div class="mb-3">
        <label for="using" class="form-label">Using Prescription</label>
        <input type="text" class="form-control" id="Using" name="Using" placeholder="Using Prescription">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
