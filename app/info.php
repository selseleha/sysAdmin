<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class info extends Model
{
    //این مدل برای ذخیره ی اطلاعات پست ایجاد شده است


    protected $fillable = [

        'title', //عنوان پست
        'text',//محتوای متنی پست
        'image',//آدرس عکس پست
        'valid',//تاییدیه نمایش پست
        'user_id',//ایدی فردی که پست را گذاشته است
        'category_id',//ایدی دسته ای که پست جز آن است

    ];

    public function user(){
        //این تابع نشان میدهد که پست متعلق به یک کاربر است
        return $this->belongsTo(User::class);

    }

    public function category(){

// این تابع نشان میدهد که پست به یک دسته تعلق دارد
        return $this->belongsTo(category::class);

    }


}
