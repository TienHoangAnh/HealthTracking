@extends('layout.layout')
@section('title','Person List')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

<div class="container">
    <h1 style="text-align:center">List of People</h1>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Name Person</th>
                    <th scope="col">IDcard Person</th>
                    <th scope="col">Phone Person</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($people as $person)
                <tr>
                    <td>{{$person->name}}</td>
                    <td>{{$person->idcard}}</td>
                    <td>{{$person->phone}}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Doctor Actions">
                            <a href="{{url("/people/".$person->id."/edit")}}" class="btn btn-outline-primary"><i class="fas fa-edit"></i> Edit</a>
                            <form action="{{url("/people/".$person->id)}}" method="post" class="d-inline">
                                {{ method_field('DELETE') }}
                                @csrf
                                <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Are you sure?');"><i class="fas fa-trash-alt"></i> Delete</button>
                            </form>
                            <a href="{{url("/people/".$person->id)}}" class="btn btn-outline-info"><i class="fas fa-eye"></i> View</a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
