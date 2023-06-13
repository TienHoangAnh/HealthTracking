@extends('layout.layout')
@section('title','Person')
@section('content')

<h2>@yield('title')</h2>

<div class="table-responsive">
    <table class="table table-striped
    table-hover
    table-borderless
    table-primary
    align-middle">
        <thead class="table-light">
            <tr>
                <th>Name Person</th>
                <th>IDcard Person</th>
                <th>Phone Person</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody class="table-group-divider">
                  @foreach ($people as $person)
                  <tr class="table-primary" >
                    <td>
                        {{$person->name}}
                    </td>
                    <td>
                        {{$person->idcard}}
                    </td>
                    <td>
                        {{$person->phone}}
                    </td>
                    <td>
                      <a href="{{url("/people/".$person->id)}}" class="btn btn-primary">View</a>
                      <a href="{{url("/people/".$person->id."/edit")}}" class="btn btn-warning">Edit</a>
                      <form action="{{url("/people/".$person->id)}}" method="post" class="d-inline">
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
