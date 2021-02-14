<?php

namespace App\Http\Controllers;

use App\User;
use App\useradds;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class addcontroller extends Controller
{
    //
    public function __construct()
    {
        //بررسی لاگین بودن برای تابع create
        $this->middleware('auth')->only('create');
    }


    public function create()
    {


        $id = User::find(Auth::id());//دریافت اطلاعات فرد لاگین شده

        $id = $id->id;//دریافت آیدی فرد لاگین شده از اطلاعات او


        //این query بررسی میکند آیا این فرد قبلا اطلاعات تکمیلی خود را وارد کرده یا خیر
        $adds = DB::table('useradds')->where('user_id', $id)->select('useradds.*')->get();


        $size = sizeof($adds);//اگر سایز مقدار بالایی بزرگتر از صفر باشد یعنی مقدار دارد

        if ($size == 0) {
            return view('user.create');//اگر مقدار نداشت صفحه ی ثبت اطلاعات را نشان میدهد
        } else {
            return redirect('/user/' . $id);//اگر از قبل مقدار داشت آن اطلاعات را برمیگرداند
        }


    }

    //dd($adds);


    //  return view('user.create');


    public function store(Request $request)
    {


        $request->validate(
            [

//بررسی وارد شدن فیلد های اجباری
                'first_name' => 'required',
                'last_name'  => 'required',

                "phone" => 'required',


                "year"  => 'required',
                'month' => 'required',
                "day"   => 'required',


                "reshteh"  => 'required',
                "uni"      => 'required',
                "job"      => 'required',
                "address"  => 'required',
                'photo'    => 'max:500',
                'filename' => ' max:500',
                'text'     => 'required',


            ]
        );


        $id = User::find(Auth::id());//دریافت اطلاعات فرد لاگین شده

        $id = $id->id;

        //  dd($request);

        //  $add=Auth::User()->useradds()->create($request->except('_token'));
        $pic = 'null';

        if ($request->has('photo')) {
            //در صورت بودن عکس آن را در حافظه ذخیره میکند
            $pic = $request->file('photo')->getClientOriginalName();
            $name = time() . $pic;
            $path = 'addimg/';//آدرس ذخیره شدن عکس در پوشه public
            $pic = $request->photo->move($path, $name);//انتقال عکس به آدرس موردنظر

        }

        $file = 'null';
        if ($request->has('filename')) {
            //اگر فایلی وارد شده بود آن را ذخیره میکند


            $file = $request->file('filename')->getClientOriginalName();
            $namefile = time() . $file;
            $path = 'addfile/';
            $file = $request->filename->move($path, $namefile);

        }


        useradds::create(//صدا زدن مدل و استفاده از تابع ایجاد سطر جدید در دیتابیس برای ذخیره اطلاعات تکمیلی
            [

                'user_id' => $id,

                'first_name' => $request['first_name'],
                'last_name'  => $request['last_name'],
                "year"       => $request['year'],
                'month'      => $request['month'],
                "day"        => $request['day'],
                "phone"      => $request['phone'],
                "tahsilat"   => $request['tahsilat'],
                "reshteh"    => $request['reshteh'],
                "uni"        => $request['uni'],
                "job"        => $request['job'],
                "address"    => $request['address'],
                'photo'      => $pic,
                'marry'      => '0',
                'text'       => 'asd',
                'filename'   => $file,

            ]
        );


        return redirect('/home');//ارجاع به صفحه خانه پس از اتمام کار

        // dd($book);

    }


    public function edit($id)
    {
        //تابع ویرایش اطلاعات تکمیلی از قبل ثبت شده

        $id = User::find(Auth::id());
        $id = $id->id;


        $adds = DB::table('useradds')->where('user_id', $id)->select('useradds.*')->get();

        //نشان دادن اطلاعات قبلی کاربر برای تغییرات در فرانت
        return view('user.edit', compact('adds'));




    }


    public function update(Request $request, $id)
    {
        //پس از آن که اطلاعات در تابع قبل به کاربر نشان داده شد و کاربر آن ها را ویرایش کرد پس از post کردن آن ها به این تابع منتقل میشود تا اطلاعات آپدیت شوند
        $userid = User::find(Auth::id());
        //dd($id);

        dd($userid->id);
    }


}
