@extends('layouts.app')
@section('content')

<div class="main container nazarat-edit">
    <form method="post" action="{{route('newcomment.update',['id'=>$comment->id])}}" enctype="multipart/form-data">
        {{csrf_field()}}
        @method('PUT')

        <div class="form-group row">
            <label class="control-label col-sm-2 text-center " for="question">سوال</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="question" name="comment" value="{{$comment->comment}}">
            </div>
        </div>

        <div class="d-flex text-right flex-col mt-5">
            <label class="text-center w-25 w-45">معتبر</label>

            <label class="container2 mx-3">
                <input checked="checked" name="valid" id="show" value="1" type="radio">
                بله
                <span class="checkmark"></span>
            </label>

            <label class="container2 mx-3">خیر
                <input name="valid" id="show" value="0" type="radio">
                <span class="checkmark"></span>
            </label>
        </div>

        @include('error')


        <div class="form-group d-flex justify-content-end">
            <div class="col-sm-offset-2 col-sm-10 pl-0">
                <button type="submit" class="btn btn-info text-lalezar">{{__('به روز رسانی تغییرات')}}</button>
            </div>
        </div>
    </form>
</div>
@endsection