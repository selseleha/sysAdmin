<?php

namespace App\Http\Controllers;

use App\category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class categorycontroller extends Controller
{
    //


    public function list(){
        //این تابع لیست همه ی دسته ها را برمیگرداند
        $categories=category::select( 'categories.category_name','categories.id')
            ->get();

        // dd($news);
        return view('category.list',compact('categories'));
    }

    public function show($id){
        //این تابع کل پست های مربوط به یک دسته را با استفاده از آیدی دسته برمیگرداند

        $news=DB::table('infos')->//انتخات جدول پست ها
        where('valid','1')->//انتخاب پست هایی که اعتبار دارند
        where('category_id',$id)->//فیلتر کردن پست هایی که آیدی آن ها مطابق آیدی ورودی باشد
        orderByRaw('created_at DESC')->//مرتب سازی آن ها بر اساس زمان ایجاد پست
        join('users', 'users.id', '=', 'infos.user_id')-> //اتصال آن با جدول کاربران برای دریافت نام و ایمیل نویسنده
        join('categories', 'categories.id', '=', 'infos.category_id')->// اتصال آن با جدول دسته بندی برای دریافت نام آن دسته
        select('infos.*', 'categories.category_name','users.name','users.email')-> //دریافت اطلاعات مورد نیاز از این query جهت نمایش در فرانت
        get();



        return view('category.show',compact('news'));
    }




}
