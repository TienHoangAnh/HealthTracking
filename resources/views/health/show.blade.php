@extends('layout.layout')
@section('title', 'Health Details')
@section('content')
<style>
  .table-primary {
    background-color: #f8f9fa;
  }

  .table-primary th {
    color: #333;
    font-weight: bold;
  }

  .table-primary td {
    color: #444;
  }
</style>
<h1 style="text-align:center;">@yield('title')</h1>
<div class="table-responsive">
    <table class="table table-primary">
        <thead>
            <tr>
                <th scope="col">Weight</th>
                <th scope="col">Height</th>
                <th scope="col">Symptom</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td scope="row">{{$health->weight}}</td>
                <td>{{$health->height}}</td>
                <td>{{$health->symptom}}</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
