@extends('layout.layout')
@section('title','List MedicalCheck')
@section('content')

<h2>@yield('title')</h2>

<div class="table-responsive">
    <table class="table table-striped
    table-hover	
    table-borderless
    table-primary
    align-middle">
        <thead class="table-light">
            <caption>MedicalChecks</caption>
            <tr>
                <th>Date</th>
                <th>Address Of Clinic</th>
                <th>Doctor</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody class="table-group-divider">
                  @foreach ($checks as $check)
                  <tr class="table-primary" >
                    <td>{{$check->date}}</td>
                    <td>{{$check->address}}</td>
                    <td>
                      <a href="{{url("/doctors/".$check->doctor->id)}}">
                        {{$check->doctor->name}}
                      </a>
                    </td>
                    <td>
                      <a href="{{url("/checks/".$check->id)}}" class="btn btn-primary">View</a>
                      <a href="{{url("/checks/".$check->id."/edit")}}" class="btn btn-warning">Edit</a>
                      <form action="{{url("/checks/".$check->id)}}" method="post" class="d-inline">
                        {{ method_field('DELETE') }}
                        @csrf
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?');">Delete</button>
                      </form>
                    </td>
                  </tr>
                  @endforeach     
            </tbody>
            <tfoot>
                
            </tfoot>
    </table>
  </div>
@endsection