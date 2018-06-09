@extends('layouts.layout')

@section('content')
    <div class="row">

        <div class="col-sm-8 blog-main">
            <div class="blog-post">

                <h2 class="blog-post-title">{{$article->title}}</h2>
                <p><img src="/images/{{ $article->image }}" ></p>
                <p>{{$article->description}}</p>
            </div>
        </div>
    </div>
@endsection