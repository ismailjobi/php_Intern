@extends('layouts.main')
@push('head')
    <title>To Do List</title>
@endpush

@section('main-section')
<div class="container">
    <div class="d-flex justify-content-between align-items-center my-5">
        <div class="h2">All ToDo List</div>
        <a href="{{route("todo.create")}}" class="btn btn-primary btn-lg">Add Task</a>
    </div>

    @if($errors->has('custom_error'))
        <div class="alert alert-danger">
            {{ $errors->first('custom_error') }}
        </div>
    @endif

    <!-- Success message handling -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-stripped table-dark">
        <tr align="center">
            <th>Name</th>
            <th>Task</th>
            <th>Due Date</th>
            <th>Action</th>
        </tr>
        @foreach ($ToDo as $todo)
            <tr valign="middle" align="center">
                <td>{{$todo->Name}}</td>
                <td>{{$todo->Task}}</td>
                <td>{{$todo->DueDate}}</td>
                <td>
                    <a href="{{route("todo.delete", $todo->id)}}" class="btn btn btn-danger btn-sm">Delete</a>
                    <a href="{{route("todo.update", $todo->id)}}" class="btn btn btn-primary btn-sm">Update</a>
                </td>
            </tr>
        @endforeach
    </table>
</div>
@endsection