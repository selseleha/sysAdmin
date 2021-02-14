<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class useradds extends Model
{

    //این مدل برای ثبت اطلاعات تکمیلی کاربر ایجاد شده است

    protected $fillable = [
        'user_id',//ایدی فردی که اطلاعات تکمیلی آن را لازم داریم
        'category_id','first_name','last_name','photo','filename',
        "year",
        'month' ,
        "day",
        "phone" ,
        "tahsilat" ,
        "reshteh",
        "uni" ,
        "job" ,
        "address" ,
        'marry',
        'text',


    ];

    public function User(){

        //این تابع نشان میدهد که هر اطلاعات تکمیلی متعلق به یک کاربر است
        return $this->belongsTo(User::class);
    }


}
