@extends('layout.layout')
@section('title','Prescription List')
@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<h1 style="text-align: center">@yield('title')</h1>

<div class="container">
  <div class="table-responsive">
      <table class="table table-striped">
          <thead class="thead-dark">
              <tr>
                <th>Name Prescription</th>
                <th>Person</th>
                <th>Action</th>
              </tr>
          </thead>
          <tbody>
            @foreach ($prescriptions as $prescription)
              <tr>
                  <td><a href="{{url("/prescriptions/".$prescription->id)}}">
                    {{$prescription->name}}
                    </a>
                  </td>
                  <td>@foreach($prescription->people as $person)
                    <span class="badge badge-info">{{$person->name}}</span>
                  @endforeach</td>
                  <td>
                      <div class="btn-group" role="group" aria-label="Doctor Actions">
                          <a href="{{url("/prescriptions/".$prescription->id."/edit")}}" class="btn btn-outline-primary"><i class="fas fa-edit"></i> Edit</a>
                          <form action="{{url("/prescriptions/".$prescription->id)}}" method="post" class="d-inline">
                              {{ method_field('DELETE') }}
                              @csrf
                              <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Are you sure?');"><i class="fas fa-trash-alt"></i> Delete</button>
                          </form>
                          <a href="{{url("/prescriptions/".$prescription->id)}}" class="btn btn-outline-info"><i class="fas fa-eye"></i> View</a>
                      </div>
                  </td>
              </tr>
            @endforeach
          </tbody>
      </table>
  </div>
</div>
@endsection


