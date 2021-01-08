@extends('layouts.app')

@section('content')


@foreach($user as $users )

<div class="container mt-3">
  <h2 style="text-align: center;">{{__('نام کاربری')}}:  <a>{{$users->name}}</a><br></h2>
  
  <div class="media border p-3">
      
    <img src="/{{$users->photo}}" alt="عکس پروفایل" class="mr-3 mt-3 rounded-circle" style="width:150px;height: 150px;box-shadow: 0 4px 8px 0 rgba(0,0,0,0.5);">
    <div class="media-body">
                <i>{{__(' نام')}} :  </i>  <a>{{$users->first_name}}</a><br>
                <i>{{__('نام خانوادگی')}}:</i>   <a>{{$users->last_name}}</a><br>
                <i>{{__('تحصیلات')}} :    </i> <a>{{$users->tahsilat}}</a><br>
                <i>{{__('رشته')}} :   </i> <a>{{$users->reshteh}}</a><br>
                <i>{{__('دانشگاه')}} :</i>   <a>{{$users->uni}}</a><br>
                <i>{{__('توضیحات')}} :</i>   <a>{{$users->text}}</a><br>


    </div>
  </div>
</div>


    <div class="container">
        
            <div>
                
              
            </div>
    </div>

    @endforeach

@endsection