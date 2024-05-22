@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Survey</h1>

        <form method="POST" action="{{url("/task/{$task->id}")}}">
        @method('PUT')
        @csrf

        <label for="name">Nama</label>
        <input type="text" name="name" id="" value="{{$task->name}}">
        <br>
        <label for="description">Comment</label>
        <textarea name="description" id="" cols="30" rows="10">
            {{$task->description}}
        </textarea>
        <br>
        <button type="submit">Edit Comment</button>
    </form>

    <a href="{{url('/task')}}">Back To Survey</a>
    </div>
@endsection