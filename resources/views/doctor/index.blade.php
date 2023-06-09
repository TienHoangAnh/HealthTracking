@extends('layout.layout')

@section('title', 'List doctors')

@section('content')

<style>
    .action{
        margin-left:200px;
    }
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<div class="container">
    <h1 style="text-align:center">List of Doctors</h1>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Department</th>
                    <th scope="col">Phone</th>
                    <th class="action" scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($doctors as $doctor)
                <tr>
                    <td>{{$doctor->name}}</td>
                    <td>{{$doctor->department}}</td>
                    <td>{{$doctor->phone}}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Doctor Actions">
                            <a href="{{url("/doctors/".$doctor->id."/edit")}}" class="btn btn-outline-primary"><i class="fas fa-edit"></i> Edit</a>
                            <form action="{{url("/doctors/".$doctor->id)}}" method="post" class="d-inline">
                                {{ method_field('DELETE') }}
                                @csrf
                                <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Are you sure?');"><i class="fas fa-trash-alt"></i> Delete</button>
                            </form>
                            <a href="{{url("/doctors/".$doctor->id)}}" class="btn btn-outline-info"><i class="fas fa-eye"></i> View</a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
