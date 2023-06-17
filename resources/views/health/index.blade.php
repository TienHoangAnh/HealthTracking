@extends('layout.layout')
@section('title','Health lists')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<div class="container">
<h1 style="text-align:center;">@yield('title')</h1>
<div class="table-responsive">
    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Weight</th>
                <th scope="col">Height</th>
                <th scope="col">Symptom</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($healths as $health)
            <tr>
                <td>{{$health->person->name}}</td>
                <td>{{$health->weight}}</td>
                <td>{{$health->height}}</td>
                <td>{{$health->symptom}}</td>
                <td>
                    <div class="btn-group" role="group" aria-label="Health Actions">
                        <a href="{{url("/healths/".$health->id."/edit")}}" class="btn btn-outline-primary"><i class="fas fa-edit"></i> Edit</a>
                        <form action="{{url("/healths/".$health->id)}}" method="post" class="d-inline">
                            {{ method_field('DELETE') }}
                            @csrf
                            <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Are you sure?');"><i class="fas fa-trash-alt"></i> Delete</button>
                        </form>
                        <a href="{{url("/healths/".$health->id)}}" class="btn btn-outline-info"><i class="fas fa-eye"></i> View</a>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
