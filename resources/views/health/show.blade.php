@extends('layout.layout')
@section('title', 'Health Details')
@section('content')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">{{$health->weight}}</h4>
            <p class="card-text">{{$health->height}}</p>
            <p class="card-text">{{$health->symptom}}</p>
        </div>
    </div>
@endsection