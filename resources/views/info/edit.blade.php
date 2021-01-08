@extends('layouts.app')

@section('content')


    <div class="container">


        <form  method="post" action="{{route('info.update',['id'=>$info->id])}}" >
    {{csrf_field()}}
    @method('PUT')



            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

            <div class="col-md-6">
                <input id="title" type="text" class="form-control" name="title" value="{{$info->title }}" >
                <textarea class="form-control" id="text"  name="text"  placeholder="متن خبر">{{$info->text }}</textarea>




                <div class="row">
                    <div class="col-md-4">
                        <label  for="sex-0">
                            <input name="valid" id="valid" value="0"  type="radio">
                           نامعتبر
                        </label>
                    </div>
                    <div class="col-md-4">
                        <label  for="sex-1">
                            <input name="valid" id="valid" value="1" type="radio">
                            معتبر
                        </label>
                    </div>

                    <label class="col-md-4" for="valid">تاییدیه</label>
                </div>


                <img src="/{{$info->image}}" >


            </div>


            <button type="submit" class="btn btn-primary">
                {{ __('Register') }}
            </button>

        </form>


        @endsection

    </div>
