@extends('layouts.layout')
@section('content')
    <div class="row">
    @foreach($articles as $article)
        <div class="col-md-4">
                <h2>{{$article->title}}</h2>
                <img src="/images/{{ $article->image }}" >

                <p> {{$article->description_short}}</p>
                <p><a href="/posts/{{$article->id}}" class="btn btn-default">Читать далее...</a></p>

                </form>

        </div>

    @endforeach


    </div>
    <p><a href="/reviews" class="btn btn-default">Отзывы</a></p>
    <div>
        <?php echo $articles->render(); ?>
    </div>

@endsection
