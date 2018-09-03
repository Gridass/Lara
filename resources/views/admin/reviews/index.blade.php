@extends('layouts.layout')
@section('content')
    <div class="row" align="center">
        @foreach($reviews as $review)
            <div class="col-md-4">
                <h2>{{$review->name}}</h2>
                <p>{{ $review->email }}</p>
                <p> {{$review->message}}
                <p><a href="/reviews/{{$review->id}}/edit" class="btn btn-primary">Редактировать</a></p>
                <form action="/reviews/{{$review->id}}" method="post">
                    {{csrf_field()}}
                {!! method_field('delete') !!}
                        <button type="submit" class="btn btn-danger">Удалить</button>
                    </form>

            </div>

        @endforeach
    </div>
<br>
    <div style="position:fixed; top:83%; left:5%">
        <a href="{{route('admin.index')}}" class="btn btn-primary pull-left"><i class="fa fa-plus-square-o"></i> Назад</a><br>
        <?php echo $reviews->render(); ?>
    </div>
@endsection