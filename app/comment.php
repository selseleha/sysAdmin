<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    //

    //این مدل برای ذخیره ی کامنت های هر پست استفاده می شود

    protected $fillable = [
        'comment',//متن کامنت
        'valid',//تاییدیه نمایش کامنت
        'user_id',//ایدی فردی که کامنت را گذاشته است
        'new_id'//ایدی پستی که زیر آن کامنت گذاشته شده
    ];


}
