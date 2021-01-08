@extends('layouts.app')
@section('content')

    <div class="container">
        
        <h1>
            {{__('عنوان')}}: {{$info->title}}
        </h1>
        
        <div class="row">  
            <div class="col-sm-1">
            </div>
            
            <div class="col-sm-10">
            <img class="img-responsive" style="width:50%;display:block;margin-left:auto;margin-right:auto;box-shadow: 0 10px 20px 0 rgba(0,0,0,0.3);" src="/{{$info->image}}" >
            </div>
            
            <div class="col-sm-1">
            </div>
        </div>    

       

        <div style="padding-top:20px;" class="row"> 
            <div class="col-sm-1">
            </div>
            
            <div class="col-sm-10">
             {{__('متن پست')}}: {{$info->text}} <br>
             
              {{__('نویسنده')}}: <a href={{"/user/".$info->user->id}}>{{$info->user->name}}</a> <br>


             {{__('کارگروه')}}:  <a href={{"/categories/".$info->category->id}}> {{$info->category->category_name}}</a><br>

             {{__('date')}}:      {{$info->created_at}}

            </div>
            
            <div class="col-sm-1">
            </div>
        </div>

        <!--{{__('دسته')}}: {{$info->image}}<br>-->

        <div class="container d-flex flex-column align-items-center px-4 ">





            <h3 class="h4 text-center border-bottom mb-4 w-75 pb-2 mt-3 ">نظرات</h3>

            <p class="text-right w-100">وارد شده بام کاربر فلان</p>

            <form style="width: 100%;" method="post" action={{"/newcomment/".$info->id}} enctype="multipart/form-data">
                {{ csrf_field() }}

                <div class="d-flex w-100 row mb-3">

                    <label for="text" class="pb-2 px-2 text-right">متن نظر</label>
                    <textarea class="rounded-0 form-control col-md-12" rows="5" id="text" name="text"
                              placeholder="نظر">{{old('text')}}</textarea>
                </div>

            @include('error')
            <!------------send button------------->
                <div class="w-100 text-left my-3 ">
                    <button type="submit" class="btn text-lalezar px-4 text-white"
                            style="background-color: #006327;border-radius: 15px">{{ __('ثبت نظر') }}
                    </button>
                </div>
            </form>


            <!-------------comments------------->

            @foreach($comment as $comments)
                <div class="row w-100 my-2">
                    <div class="col-2 text-center">
                        <img src="{{asset("images/persion.png")}}" class=" rounded-circle square ">
                    </div>
                    <div class="col-10 text-right">
                        <p class="text-iransansBold">{{$comments->name}}</p>
                        <p>
                            {{$comments->comment}}
                        </p>
                    </div>
                </div>
            @endforeach

        </div>

    </div>

@endsection
