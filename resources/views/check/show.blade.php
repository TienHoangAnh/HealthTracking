@extends('layout.layout')
@section('title','MedicalCheck Detail')
@section('content')

<h2 class = "h2">@yield('title')</h2>


<div class="card">
  <div class="card-body">
      <h4 class="card-title">{{$check->date}}</h4>    
      <p class="card-text">{{$check->address}}</p>
      <p class="card-text">{{$check->department}}</p>
      <h6 class="card-subtitle mb-2 text-muted">{{$check->doctor->name}}</h6>
  </div>
</div>

@endsection