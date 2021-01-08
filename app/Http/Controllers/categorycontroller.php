<?php

namespace App\Http\Controllers;

use App\category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class categorycontroller extends Controller
{
    //


    public function list(){
        $categories=category::select( 'categories.category_name','categories.id')
            ->get();

        // dd($news);
        return view('category.list',compact('categories'));
    }

    public function show($id){


        $news=DB::table('infos')->where('valid','1')->
        where('category_id',$id)->
        orderByRaw('created_at DESC')->
        join('users', 'users.id', '=', 'infos.user_id')->
        join('categories', 'categories.id', '=', 'infos.category_id')
            ->select('infos.*', 'categories.category_name','users.name','users.email')
            ->get();




        // dd($news);
        return view('category.show',compact('news'));
    }




}
