@extends('layout.layout')
@section('title','List doctors')
@section('content')
<div class="table-responsive">
    <table class="table table-primary">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Department</th>
                <th scope="col">Phone</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr class="">
                @foreach ($doctors as $doctor)
                <td>{{$doctor->name}}</td>
                <td>{{$doctor->department}}</td>
                <td>{{$doctor->phone}}</td>
                <td>
                    <a href="{{url("/doctors/".$doctor->id."/edit")}}" class="btn btn-warning">Edit</a>
                    <form action="{{url("/doctors/".$doctor->id)}}" method="post" class="d-inline">
                      {{ method_field('DELETE') }}
                      @csrf
                      <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?');">Delete</button>
                      <a href="{{url("/doctors/".$doctor->id)}}" class="btn btn-primary">View</a>
                    </form>
                  </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
