@extends('layouts.app')
@section('content')
    <div class="container">

        @foreach($news as $new )


            <div>
                <form method="get" action={{"/infos/".$new->id."/edit/"}} enctype="multipart/form-data">
                <a href={{"/infos/".$new->id}}>{{$new->title}}</a>
                <p> creator: {{$new->name}}</p>
                <p> email: {{$new->email}}</p>
                <p> categories: {{$new->category_name}}</p>
                <button type="submit" class="btn btn-block">{{__('بررسی')}}</button>
                </form>
            </div>


        @endforeach



        @endsection

    </div>