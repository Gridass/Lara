@extends('layouts.layout')

@section('content')
    <div class="row">

        <div class="col-sm-8 blog-main">
            <div class="blog-post">

                <h2 class="blog-post-title">{{$article->title}}</h2>
                <p class="blog-post-meta"><a href="#">{{$article->created_ad}}</a></p>
                <p>{{$article->description}}</p>
                <img src="http://lara/public/images/картинка.jpeg">
            </div>
        </div>
    </div>
@endsection