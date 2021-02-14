<?php

namespace App\Http\Controllers;

use App\comment;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{



    public function index()
    {

        $newcomments=comment::orderByRaw('valid')->//دریافت کامنت ها با اولویت تایید نشده ها
        join('infos', 'infos.id', '=', 'comments.new_id')->//اتصال با جدول پست ها برای دریافت نام پست مربوط به کامنت
        select('comments.*','infos.title')->//دریافت اطلاعات مورد نظر
        paginate(5);//نمایش ۵ کامنت در هر صفحه برای شلوغ نشدن صفحه

        return view('newcomment.index',compact('newcomments'));

    }


    public function create()
    {


    }



    public function store(Request $request)
    {

    }


    public function show(message $message)
    {
        //
    }


    public function edit($id)
    {
        //این تابع برای ویرایش کامنت هنگام تایید آن است
        $comment=comment::findorfail($id);//پیدا کردن کامند با استفاده از آیدی

        return view('newcomment.edit',compact('comment'));


    }


    public function update($id,Request $request){

        //پس از ویرایش کامنت میتواند تغییر کند یا تایید شود


        comment::where('id', $id)
            ->update([

                'comment' => $request->comment,

                'valid'=>$request->valid,

            ]);

        return redirect('/newcomment/list');


    }
    public function accept($id){
        //این تابع برای تایید سریع کامنت است
        comment::where('id', $id)
            ->update([

                'valid'=>'1',


            ]);

        return redirect('/newcomment/list');

    }

    public function destroy($id){
//این تابع برای حذف کامنت میباشد
        comment::where('id', $id)
            ->delete();


        return redirect('/newcomment/list');

    }

    public function storecomment(Request $request,$id){


//این تابع برای ایجاد کامنت ایجاد شده است

        $userid = User::find(Auth::id());
        //دریافت آدی فرد لاگین شده
        $userid= $userid->id;


        $info=comment::create([

            'comment'=>$request['text'],//دریافت متن کامنت
            'new_id'=>$id,//دریافت آیدی پست که زیر آن کامنت گذاشته شده
            'valid'=>'0',//کامنت در ابتدا غیر معتبر است پس مقدار آن را صفر میدهیم 
            'user_id'=>$userid,

        ]);

        return redirect('/infos/'.$id);




    }



}
