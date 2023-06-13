@extends('layout.layout')
@section('title', 'Edit Health Information')
@section('content')
<form action="/healths" method="post">
    @csrf
    <div class="mb-3">
        <label for="weight" class="form-label">Weight</label>
        <input type="text" class="form-control" id="weight" name="weight" placeholder="Weight" value="{{$health->weight}}">
    </div>
    <div class="mb-3">
        <label for="height" class="form-label">Height</label>
        <input type="text" class="form-control" id="height" name="height" placeholder="Height" value="{{$health->height}}">
    </div>
    <div class="mb-3">
        <label for="symptom" class="form-label">Symptom</label>
        <input type="text" class="form-control" id="symptom" name="symptom" placeholder="Symptom" value="{{$health->symptom}}">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection