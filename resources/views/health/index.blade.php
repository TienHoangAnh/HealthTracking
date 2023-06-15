@extends('layout.layout')
@section('title','Health')
@section('content')
<div class="table-responsive">
    <table class="table table-primary">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Weight</th>
                <th scope="col">Height</th>
                <th scope="col">Symptom</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr class="">
                @foreach ($healths as $health)
                <td>{{$health->person->name}}</td>
                <td>{{$health->weight}}</td>
                <td>{{$health->height}}</td>
                <td>{{$health->symptom}}</td>
                <td>
                    <a href="{{url("/healths/".$health->id."/edit")}}" class="btn btn-warning">Edit</a>
                    <form action="{{url("/healths/".$health->id)}}" method="post" class="d-inline">
                      {{ method_field('DELETE') }}
                      @csrf
                      <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?');">Delete</button>
                      <a href="{{url("/healths/".$health->id)}}" class="btn btn-primary">View</a>
                    </form>
                  </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>



@endsection
