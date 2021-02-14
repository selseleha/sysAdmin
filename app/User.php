<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
//این مدل نشان دهنده ی اطلاعات کاربر هست که توسط توابع آماده ی لاراول ایجاد شده است
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','filename',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function useradds(){
        //هر کاربر یک اطلاعات تکمیلی دارد
        return $this->hasOne(useradds::class);

    }

    public function info(){
        //هر کاربر میتواند تعتداد زیادی پست داشته باشد
        return $this->hasMany(info::class);

    }


}
