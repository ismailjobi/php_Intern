@extends('layouts.main')

@push('head')
    <title>Update</title>
@endpush

@section('main-section')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center my-5">
            <div class="h2">Update ToDo</div>
            <a href="{{ route('todo.home') }}" class="btn btn-primary btn-lg">Back</a>
        </div>

        <div class="card">
            <div class="card-body">
                <form action="" method="post">
                    @csrf
                    <input type="text" name="id" value="{{ $ToDo->id }}" hidden>
                    <label for="name" class="form-label mt-4">Name</label>
                    <input type="text" name="name" class="form-control" value="{{ $ToDo->Name }}">
                    
                    <label for="task" class="form-label mt-4">Task</label>
                    <input type="text" name="task" class="form-control" value="{{ $ToDo->Task }}">

                    <label for="dueDate" class="form-label mt-4">Due Date</label>
                    <input type="date" name="dueDate" class="form-control" value="{{ \Carbon\Carbon::parse($ToDo->DueDate)->format('Y-m-d') }}">
                    
                    <button class="btn btn-primary btn-lg mt-4">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
