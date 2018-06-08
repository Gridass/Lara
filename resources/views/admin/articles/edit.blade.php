@extends('layouts.layout')

@section('content')

<div class="container">


  <hr />

  <form class="form-horizontal" action="{{route('admin.article.update', $article)}}" method="post">
    <input type="hidden" name="_method" value="put">
    {{ csrf_field() }}

    {{-- Form include --}}
    @include('admin.articles.partials.form')

    <input type="hidden" name="modified_by" value="{{Auth::id()}}">
  </form>
</div>

@endsection 
