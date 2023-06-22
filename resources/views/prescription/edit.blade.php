@extends('layout.layout')
@section('title', 'Edit Prescription')
@section('content')

<h1 style="text-align:center">@yield('title')</h1>
<div class="container">
  <div class="row">
    <div class="col-md-6 offset-md-3">
      <div class="edit-prescription-form">
        <form action="/prescriptions/{{$prescription->id}}" method="post">
          {{ method_field('PUT') }}
          @csrf
          <div class="mb-3">
            <label for="people" class="form-label">Person</label>
            <select class="form-control" id="people" name="people[]">
              <option selected>Choose Person</option>
              @foreach($people as $person)
              <option value="{{ $person->id }}">{{ $person->name }}</option>
              @endforeach
            </select>
          </div>
            <div class="mb-3">
                <label for="name" class="form-label">Name Prescription</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Name Prescription" value="{{$prescription->name}}">
            </div>
            <div class="mb-3">
                <label for="amount" class="form-label">Amount Prescription</label>
                <input type="text" class="form-control" id="amount" name="amount" placeholder="Amount Prescription" value="{{$prescription->amount}}">
            </div>
            <div class="mb-3">
                <label for="using" class="form-label">Using Prescription</label>
                <input type="text" class="form-control" id="using" name="using" placeholder="Using Prescription" value="{{$prescription->using}}">
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