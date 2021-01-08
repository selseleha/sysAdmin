@extends('layouts.app')

@section('content')




    <div class="container">





        @foreach($user as $users )


            <div>

                {{__('نام کاربری')}}:  <a>{{$users->name}}</a><br>
                {{__('نام')}}:    <a>{{$users->first_name}}</a><br>
                {{__('نام خانوادگی')}}:   <a>{{$users->last_name}}</a><br>
                {{__('سال تولد')}}:    <a>{{$users->year}}</a><br>
                {{__('ماه تولد')}}:    <a>{{$users->month}}</a><br>
                {{__('روز تولد')}}:    <a>{{$users->day}}</a><br>
                {{__('شماره')}}:    <a>{{$users->phone}}</a><br>
                {{__('تحصیلات')}}:    <a>{{$users->tahsilat}}</a><br>
                {{__('رشته')}}:    <a>{{$users->reshteh}}</a><br>
                {{__('دانشگاه')}}:   <a>{{$users->uni}}</a><br>
                {{__('شغل')}}:   <a>{{$users->job}}</a><br>
                {{__('آدرس')}}: <a>{{$users->address}}</a><br>
                    <img src="/{{$users->photo}}" >



            </div>



        @endforeach


    </div>



@endsection