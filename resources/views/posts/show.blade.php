@extends('layouts.layout')

@section('content')
    <div class="row"  >
        <div class="col-sm-12 blog-main">
            <div class="blog-post ">

                <h2 class="blog-post-title" align="center">{{$article->title}}</h2>
                <p><img src="/images/{{ $article->image }}" width="100%"></p>
                <font size="4"><p>{{$article->description}}</p></font>
            </div>
        </div>
    </div>

@endsection