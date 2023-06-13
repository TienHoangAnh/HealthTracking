@extends('layout.layout')
@section('title','Prescription List')
@section('content')

<h2>@yield('title')</h2>

<div class="table-responsive">
    <table class="table table-striped
    table-hover
    table-borderless
    table-primary
    align-middle">
        <thead class="table-light">
            <caption>Prescription</caption>
            <tr>
                <th>Name Prescription</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody class="table-group-divider">
                  @foreach ($prescriptions as $prescription)
                  <tr class="table-primary" >
                    <td><a href="{{url("/prescriptions/".$prescription->id)}}">
                        {{$prescription->name}}
                        </a></td>
                    <td>
                      <a href="{{url("/prescriptions/".$prescription->id)}}" class="btn btn-primary">View</a>
                      <a href="{{url("/prescriptions/".$prescription->id."/edit")}}" class="btn btn-warning">Edit</a>
                      <form action="{{url("/prescriptions/".$prescription->id)}}" method="post" class="d-inline">
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
