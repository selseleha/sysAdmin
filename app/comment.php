<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    //

    protected $fillable = [
        'comment','valid','user_id','new_id'
    ];


}
