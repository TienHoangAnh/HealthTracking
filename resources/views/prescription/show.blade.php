@extends('layout.layout')
@section('title', 'Prescription Detail')
@section('content')
<h2>@yield('title')</h2>
<div class="card">
    <div class="card-body">
        <h4 class="card-title">{{$prescription->name}}</h4>
        <h4 class="card-title">{{$prescription->amount}}</h4>
        <h4 class="card-title">{{$prescription->using}}</h4>
    </div>
</div>

@endsection