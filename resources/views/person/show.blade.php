@extends('layout.layout')
@section('title','')
@section('content')

<h2>@yield('title')</h2>

<div class="table-responsive">
    <table class="table table-striped
    table-hover
    table-borderless
    table-primary
    align-middle">
        <thead class="table-light">
            <button type="button" class="btn btn-default btn-sm">
                <span class="glyphicon glyphicon-arrow-left"></span><a style="color: black; text-decoration: none" href="{{url("/people/")}}"> Back</a>
              </button>
            <tr>
                <th>Name Person</th>
                <th>Birth Person</th>
                <th>Address Person</th>
                <th>IDcard Person</th>
                <th>Phone Person</th>
                <th>Email Person</th>
            </tr>
            </thead>
            <tbody class="table-group-divider">
                  <tr class="table-primary" >
                    <td>
                        {{$person->name}}
                    </td>
                    <td>
                        {{$person->birth}}
                    </td>
                    <td>
                        {{$person->address}}
                    </td>
                    <td>
                        {{$person->idcard}}
                    </td>
                    <td>
                        {{$person->phone}}
                    </td>
                    <td>
                        {{$person->email}}
                    </td>
                  </tr>
            </tbody>
            <tfoot>
            </tfoot>
    </table>
  </div>

@endsection
