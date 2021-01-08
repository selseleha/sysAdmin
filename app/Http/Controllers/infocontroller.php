<?php

namespace App\Http\Controllers;

use App\category;
use App\info;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class infocontroller extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth')->only('create');
    }


    public function create(){


        $categories=category::all();

        return view('info.create',compact('categories'));
    }






    public function store(Request $request)
    {

        $request->validate([
            'text' => 'required',
            'title' => 'required',
            'image' => 'required | max:500',


        ]);

        // dd($request);
        $id = User::find(Auth::id());
        $id = $id->id;
        // dd($id);
        //dd($request);

        $pic = $request->file('image')->getClientOriginalName();
        $name = time() . $pic;
        $path = 'infoimg/';
        $pic = $request->image->move($path, $name);
        $user = $request->user();
        //dd($user);
        //dd($request);
        $cat = $request->get('category_id');
        $cat = implode(' ', $cat);


//        for ($i = 1; $i < 30; $i++){
            info::create([
                'text' => $request['text'],
                'title' => $request['title'],
                'image' => $pic,
                'user_id' => $id,
                'category_id' => $cat,
                'valid' => '0',


            ]);
//    }

        return redirect('/home');


    }


    public function list(){
        $news=DB::table('infos')->where('valid','1')->
          orderByRaw('created_at DESC')->
            join('users', 'users.id', '=', 'infos.user_id')->
            join('categories', 'categories.id', '=', 'infos.category_id')
            ->select('infos.*', 'categories.category_name','users.name','users.email')
            ->get();

      $categories=DB::table('infos')->
        join('categories', 'categories.id', '=', 'infos.category_id')
            ->get();


      // dd($news);
        return view('info.list',compact('news','categories'));


    }



    public function show($id){

        $comment=DB::table('comments')->orderByRaw('created_at DESC')->where('new_id',$id)->where('valid','1')->
        join('users', 'users.id', '=', 'comments.user_id')->select('comment','user_id','name','comments.created_at')->get();


        $info=\App\info::findorfail($id);
        return view('info.show',compact('info','comment'));

    }



}
