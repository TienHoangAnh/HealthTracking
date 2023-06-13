@extends('layout.layout')
@section('title', 'New Health Information')
@section('content')
<form action="/healths" method="post">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <select name="person" id="person" class="form-control">
          @foreach($people as $person)
          <option value="{{$person->id}}">{{$person->name}}</option>
          @endforeach
      </select>
      </div>
    <div class="mb-3">
        <label for="weight" class="form-label">Weight (kg) </label>
        <input type="number" class="form-control" id="weight" name="weight" placeholder="Weight">
    </div>
    <div class="mb-3">
        <label for="height" class="form-label">Height (cm)</label>
        <input type="number" class="form-control" id="height" name="height" placeholder="Height">
    </div>
    <div class="mb-3">
        <label for="symptom" class="form-label">Symptom</label>
        <input type="text" class="form-control" id="symptom" name="symptom" placeholder="Symptom">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection