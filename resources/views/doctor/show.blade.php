@extends('layout.layout')
@section('title', 'Doctor Details')
@section('content')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">{{$doctor->name}}</h4>
            <p class="card-text">{{$doctor->department}}</p>
            <p class="card-text">{{$doctor->phone}}</p>
        </div>
    </div>
@endsection