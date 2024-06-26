@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>
            Create New Survey
        </h1>

        <form method="POST" action="{{url('/task/store')}}">
            @csrf <!--Cross-site request forgery -->

            <label for="name">Name</label>
            <input type="text" name="name" id="">
            <br>
            <label for="description">Comment</label>
            <textarea name="description" id="" cols="30" rows="10"></textarea>
            <br>
            <button type="submit">Create Comment</button>
        </form>
        <a href="{{url('/task')}}">Back To Survey</a>
    </div>
@endsection