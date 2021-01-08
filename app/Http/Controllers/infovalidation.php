<?php

namespace App\Http\Controllers;

use App\category;
use App\info;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class infovalidation extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function list(){


        $user=Auth::user()->role;


        if($user==2) {
            $news = DB::table('infos')->where('valid', '0')->
            orderByRaw('created_at DESC')->
            join('users', 'users.id', '=', 'infos.user_id')->
            join('categories', 'categories.id', '=', 'infos.category_id')
                ->select('infos.*', 'categories.category_name', 'users.name', 'users.email')
                ->get();

            $categories = DB::table('infos')->
            join('categories', 'categories.id', '=', 'infos.category_id')
                ->get();


            // dd($news);
            return view('info.valid', compact('news', 'categories'));

        }
        else { return view('error.403');}

    }



    public function edit($id)
    {
        // dd();

        $info = info::find($id);

        //$this->authorize('update', $book);

        /*  if($product->user->id != Auth::user()->id){
              abort(404,'adminnnnn');
             // return redirect('/');
          }*/

        $categories = category::all();

        return view('info.edit', compact('info', 'categories'));


    }

    public function update(Request $request, $id)
    {

       //   dd($request);
        $info = info::find($id);
        $info->update($request->only(['title', 'text','valid']));

        return redirect('/infos');


    }


}
