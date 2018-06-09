@extends('layouts.layout')
@section('content')
    <h2>Create a review</h2>

    <form action="/reviews" method="post">
        {{csrf_field()}}

        <div class="form-group">
            <label for="nema">Name</label>
            <input class="form-control" pattern="^[a-zA-Z]+$" type="text" name="name" id="name" required>
        </div>

        <div class="form-group">
            <label for="alias">email</label>
            <input class="form-control" type="text" name="email" id="email" required>
        </div>

        <div class="form-group">
            <label for="message">Text</label>
            <textarea class="form-control" type="text" name="message" id="message" required></textarea>
        </div>
        <div class="g-recaptcha" data-sitekey="6LdLIF4UAAAAAG0W6wfH6DAMgejHNE2RAyUOvRwV"></div>

        <div class="form-group">
            <button class="btn btn-primary" type="submit">Create</button>
            <p><a href="{{route('reviews.index')}}" class="btn btn-primary pull-left"><i class="fa fa-plus-square-o"></i>Back</a><p/><br>
        </div>

    </form>


@endsection