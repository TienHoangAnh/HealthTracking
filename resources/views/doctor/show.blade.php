@extends('layout.layout')
@section('title', 'Doctor Details')
@section('content')
<div class="table-responsive">
    <table class="table table-primary">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Department</th>
                <th scope="col">Phone</th>
                <th scope="col">Description</th>
            </tr>
        </thead>
        <tbody>
            <tr class="">
                <td scope="row">{{$doctor->name}}</td>
                <td>{{$doctor->department}}</td>
                <td>{{$doctor->phone}}</td>
                <td>{{$doctor->description}}</td>
            </tr>
        </tbody>
    </table>
   </div>
@endsection
