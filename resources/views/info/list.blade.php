@extends('layouts.app')
@section('content')

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>شورای مشورتی جوانان</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <!-- Styles -->
    <style>


        .card-body:hover {
          box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
        }

</style>
</head>

<body>
<div class="container">
    <div class="row">
    @foreach($news as $new )
        <div class="col-sm-4">
            <div style="margin-bottom: 15px;box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);transition: 0.3s;width: 100%;" class="card">
                    <div class="card-header">
                        <a href={{"/infos/".$new->id}}>{{$new->title}}</a>
                    </div>
        
                    <div style="padding: 0px;" class="card-body">
                      <a href={{"/infos/".$new->id}}>  <img style="width: 100%;height: 43%;" src="/{{$new->image}}" > </a>
                        <p style="padding-top: 10px;"> منتشرکننده: {{$new->email}}</p>
                        <p> کارگروه: {{$new->category_name}}</p>
                    </div>
                </div>
        </div>
    @endforeach
    @endsection
    </div>
</div>
</body>
</html>