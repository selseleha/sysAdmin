@extends('layouts.panel')


@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">


<form method="post" action="/info" enctype="multipart/form-data">
    {{ csrf_field() }}

    <div class="form-group">


        <div class="col-md-12">
            <label for="username"> عنوان پست </label>
            <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}" >
            <label for="username"> متن پست </label>
            <textarea style="height: 350px;" class="form-control" id="text"  name="text" placeholder="متن خبر">{{old('text')}}</textarea>
            <label for="username"> دسته بندی پست</label>
            <select name="category_id[]" id="category" class="form-control"  >

                @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->category_name}}</option>

                @endforeach

            </select>


        </div>
    </div>
    <input type="file" name="image" id="image">


    @include('error')

    <button type="submit" class="btn btn-primary">
        {{ __('ارسال پست') }}
    </button>

</form>
                </div>
            </div>
        </div>
    </div>
@endsection