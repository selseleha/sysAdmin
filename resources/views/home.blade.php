@extends('layouts.user_panel')

@section('content1')
    <div class="container">
        <div class="row justify-content-center">



                        @foreach($news as $new )

                            <div class="col-sm-4">
                                <div style="margin-bottom: 15px;box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);transition: 0.3s;width: 100%;"
                                     class="card">

                                    <div class="card-header">
                                        <a href={{"/infos/".$new->id}}>{{$new->title}}</a>
                                    </div>

                                    <div style="padding: 0px;" class="card-body">
                                        <a href={{"/infos/".$new->id}}> <img style="width: 100%;height: 43%;"
                                                                             src="/{{$new->image}}"> </a>
                                        <div class="container">
                                            <p dir="rtl" align="right"> منتشرکننده: {{$new->email}}</p>
                                            <p> کارگروه: {{$new->category_name}}</p>
                                        </div>
                                    </div>
                                </div>

                            </div>


                        @endforeach


                    </div>

        <div class="d-flex justify-content-center">
        {{$news->links()}}

                </div>

@endsection
