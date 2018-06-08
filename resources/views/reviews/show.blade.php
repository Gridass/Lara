@extends('layouts.layout')

@section('content')
    <div class="row">

        <div class="col-sm-8 blog-main">
            <div class="blog-post">

                <p> class="blog-post-title">{{$review->name}}</p>
                <p>{{$review->created_ad}}</p>
                <p>{{$review->email}}</p>
                <p>{{ $review->message }}</p>
            </div>
        </div>
    </div>
@endsection