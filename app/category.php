<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    //

    //مدل مربوط به جدول دسته بندی پست ها


    public function info(){
        //این تابع بیان میکند که هر دسته  دارای تعدادی پست یا info می باشد
        return $this->hasMany(info::class);

    }

}
