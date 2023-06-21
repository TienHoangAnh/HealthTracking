@extends('layout.layout')
@section('title', 'New Health Information')
@section('content')
<style>
    .mb-3{
        max-width: 400px;
    }
</style>
<h1 style="margin-left:600px" >Edit Health</h1>
<form style="margin-left:500px" action="/healths/{{$health->id}}" method="post">
    {{ method_field('PUT') }}
    @csrf
    <div class="mb-3">
        <label for="person" class="form-label">Name</label>
        <select name="person" id="person" class="form-control">
          @foreach($people as $person)
          <option value="{{$person->id}}">{{$person->name}}</option>
          @endforeach
      </select>
      </div>
    <div  class="mb-3">
        <label for="weight" class="form-label">Weight (kg) </label>
        <input type="number" class="form-control" id="weight" name="weight" placeholder="Weight" value="{{$health->weight}}">
    </div>
    <div class="mb-3">
        <label for="height" class="form-label">Height (cm)</label>
        <input type="number" class="form-control" id="height" name="height" placeholder="Height" value="{{$health->height}}">
    </div>
    <div class="mb-3">
        <label for="symptom" class="form-label">Symptom</label>
        <input type="text" class="form-control" id="symptom" name="symptom" placeholder="Symptom" value="{{$health->symptom}}">
    </div>
    <button style="margin-left: 157px" type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection