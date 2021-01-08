<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    //

    public function info(){

        return $this->hasMany(info::class);

    }

}
