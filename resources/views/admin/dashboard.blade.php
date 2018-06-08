@extends('layouts.layout')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="jumbotron text-center">
                    <p><span class="label label-primary">Категорий 0</span></p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="jumbotron text-center">
                    <p><span class="label label-primary">Материалов 0</span></p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="jumbotron text-center">
                    <p><span class="label label-primary">Посетителей 0</span></p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="jumbotron text-center">
                    <p><span class="label label-primary">Сегодня 0</span></p>
                </div>
            </div>


            <div class="col-sm-6">
                <a class="btn btn-block btn-default" href="{{route('admin.category.create')}}">Создать категорию</a>
                <a class="btn btn-block btn-default" href="{{route('admin.category.index')}}">Список категорий</a>
            </div>
            <div class="col-sm-6">
                <a class="btn btn-block btn-default" href="{{route('admin.article.create')}}">Создать Материал</a>
                <a class="btn btn-block btn-default" href="{{route('admin.article.index')}}">Список новостей</a>

            </div>
        </div>
    </div>

@endsection