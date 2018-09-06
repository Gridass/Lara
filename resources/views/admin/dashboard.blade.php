<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Admin</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700" rel="stylesheet">

    <!-- Template Styles -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- CSS Reset -->
    <link rel="stylesheet" href="css/normalize.css">

    <!-- Milligram CSS minified -->
    <link rel="stylesheet" href="css/milligram.min.css">

    <!-- Main Styles -->
    <link rel="stylesheet" href="css/styles.css">

    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>

<body>
<div class="navbar">
    <div class="row">
        <div class="column column-30">
            <div class="user-section"><a href="#">
                    <div class="username">
                        <h4>John Dou</h4>
                        <p>Administrator</p>
                    </div>
                </a></div>
        </div>
    </div>
</div>
<div class="row">
    <div id="sidebar" class="column">
        <h5>Navigation</h5>
        <ul>
            <li><a href="/"><em class="fa fa-home"></em>Portfolio</a></li>
            <li><a href="/reviews"><em class="fa fa-bar-chart"></em> Reviews</a></li>
            </ul>
    </div>
    <section id="main-content" class="column column-offset-20">
        <!--Charts-->
        <h5>Charts</h5><a class="anchor" name="charts"></a>
        <div class="row grid-responsive">
            <div class="column column-50">
                <div class="card">
                    <div class="card-title">
                        <h2>Line Chart</h2>
                    </div>
                    <div class="card-block">
                        <div class="canvas-wrapper">
                            <canvas class="chart" id="line-chart" height="auto" width="auto"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column column-50">
                <div class="card">
                    <div class="card-title">
                        <h2>Bar Chart</h2>
                    </div>
                    <div class="card-block">
                        <div class="canvas-wrapper">
                            <canvas class="chart" id="bar-chart" height="auto" width="auto"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Buttons-->
        <h5 class="mt-2">Menu</h5><a class="anchor" name="buttons"></a>
        <div class="row grid-responsive">
            <div class="column">
                <!-- Default Button -->
                <a class="button" href="{{route('admin.category.create')}}">Создать категорию</a>
                <a class="button" href="{{route('admin.category.index')}}">Список категорий</a>
                <a class="button" href="{{route('admin.article.create')}}">Создать пост</a>
                <a class="button" href="{{route('admin.article.index')}}">Список постов</a>
                <a class="button" href="{{route('admin.reviews.index')}}">Отзывы</a>

            </div>
        </div>
        <p class="credit">Admin_tut_boh</p>
    </section>
</div>

<script src="js/chart.min.js"></script>
<script src="js/chart-data.js"></script>
<script>
    window.onload = function () {
        var chart1 = document.getElementById("line-chart").getContext("2d");
        window.myLine = new Chart(chart1).Line(lineChartData, {
            responsive: true,
            scaleLineColor: "rgba(0,0,0,.2)",
            scaleGridLineColor: "rgba(0,0,0,.05)",
            scaleFontColor: "#c5c7cc"
        });
        var chart2 = document.getElementById("bar-chart").getContext("2d");
        window.myBar = new Chart(chart2).Bar(barChartData, {
            responsive: true,
            scaleLineColor: "rgba(0,0,0,.2)",
            scaleGridLineColor: "rgba(0,0,0,.05)",
            scaleFontColor: "#c5c7cc"
        });
        var chart4 = document.getElementById("pie-chart").getContext("2d");
        window.myPie = new Chart(chart4).Pie(pieData, {
            responsive: true,
            segmentShowStroke: false
        });
        var chart5 = document.getElementById("radar-chart").getContext("2d");
        window.myRadarChart = new Chart(chart5).Radar(radarData, {
            responsive: true,
            scaleLineColor: "rgba(0,0,0,.05)",
            angleLineColor: "rgba(0,0,0,.2)"
        });
        var chart6 = document.getElementById("polar-area-chart").getContext("2d");
        window.myPolarAreaChart = new Chart(chart6).PolarArea(polarData, {
            responsive: true,
            scaleLineColor: "rgba(0,0,0,.2)",
            segmentShowStroke: false
        });
    };
</script>

</body>
</html>
{{--@extends('layouts.layout')--}}

{{--@section('content')--}}

{{--<div class="container">--}}
{{--<div class="row">--}}
{{--<div class="col-sm-6">--}}
{{--<a class="btn btn-block btn-default" href="{{route('admin.category.create')}}">Создать категорию</a>--}}
{{--<a class="btn btn-block btn-default" href="{{route('admin.category.index')}}">Список категорий</a>--}}
{{--</div>--}}
{{--<div class="col-sm-6">--}}
{{--<a class="btn btn-block btn-default" href="{{route('admin.article.create')}}">Создать пост</a>--}}
{{--<a class="btn btn-block btn-default" href="{{route('admin.article.index')}}">Список постов</a>--}}
{{--<a class="btn btn-block btn-default" href="{{route('admin.reviews.index')}}">Отзывы</a>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}

{{--@endsection--}}