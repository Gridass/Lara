@extends('layouts.layout')
@section('content')
    <h2>Create a review</h2>

    <form action="/reviews/{{$review->id}}" method="post">
        {{csrf_field()}}
        {!! method_field('patch') !!}
        <div class="form-group">
            <label for="title">Name</label>
            <input class="form-control" pattern="^[a-zA-Z]+$" type="text" name="name" id="name" required>
        </div>

        <div class="form-group">
            <label for="alias">Title</label>
            <input class="form-control" type="text" name="email" id="email" required>
        </div>

        <div class="form-group">
            <label for="body">Text</label>
            <textarea class="form-control" type="text" name="body" id="body" required></textarea>
        </div>

        <div class="form-group">
            <button class="btn btn-primary" type="submit">Create</button>
        </div>
        @include('layouts.errors')
    </form>


@endsection