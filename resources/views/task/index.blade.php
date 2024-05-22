@extends('layouts.app')

@section('content')
<div>
    <h1>Survey List</h1>

    @foreach ($tasks as $task)
    <div class="task-item">
        <strong>Nama : {{ $task->name }}</strong>
        <p>Comment: {{ $task->description }}</p>

        <a href="{{url("/task/{$task->id}")}}" class="view-link">View</a>
        <a href="{{url("/task/{$task->id}/edit")}}" class="edit-link">Edit</a>

        <form action="{{url('/task',[$task->id])}}" method="POST" class="delete-form">
            @method('delete')
            @csrf
            <button class="warna" type="submit">Delete</button>
        </form>
    </div>
    @endforeach
</div>

@endsection