@extends('layout.layout')
@section('title', 'Health Details')
@section('content')
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
            <tr class="">
                <td scope="row">{{$health->weight}}</td>
                <td>{{$health->height}}</td>
                <td>{{$health->symptom}}</td>
            </tr>
        </tbody>
    </table>
   </div>
   
@endsection