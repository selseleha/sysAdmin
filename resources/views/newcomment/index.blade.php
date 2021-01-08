@extends('layouts.panel')
@section('content')
<div class="main">
    <div class="container mt-4">

        @foreach($newcomments as $newcomment)
            <div class="nazarat row my-4 pt-3">
                <div class="col-sm-3 text-center">
                    <a style="background-color: #95b2ac"
                       href="/news/{{$newcomment->new_id}}"> {{$newcomment->title}} </a>
                </div>
                <div class="col-sm-9 text-right">
                    <p>{{$newcomment->comment}}</p>
                    <div class="mb-2 mt-4 d-flex flex-row butons">
                        <a role="button" href="/newcommentdelete/{{$newcomment->id}}"
                           onclick="return confirm('از حذف آیتم مطمئن هستید؟');"
                           class="btn btn-danger text-lalezar py-1 px-4 mx-2">حذف</a>
                        <a href="/newcomment/{{$newcomment->id}}/edit" role="button"
                           class="btn edit-btn text-lalezar py-1 px-4 mx-2 ">ویرایش</a>
                        @if(!$newcomment->valid)
                            <a role="button" href="/newcommentaccept/{{$newcomment->id}}"
                               onclick="return confirm('از تایید آیتم مطمئن هستید؟');"
                               class="btn btn-success text-lalezar py-1 px-4 mx-2">قبول</a>
                        @endif
                    </div>
                </div>
            </div>
<hr>
        @endforeach

    </div>

    <div class="d-flex justify-content-center">
        {{$newcomments->links()}}
    </div>
</div>

@endsection