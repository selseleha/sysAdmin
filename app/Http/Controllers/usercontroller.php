<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class usercontroller extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth')->only('show');
    }


    public function show($id)
    {

        // $user = User::find($id);

        if ($id == Auth::user()->id) {


            $user = DB::table('users')->
            join('useradds', 'useradds.user_id', '=', 'users.id')->
            where('users.id', '=', $id)->get();


            // dd($news);
            return view('user.show', compact('user'));

        } else {

            $user = DB::table('users')->
            join('useradds', 'useradds.user_id', '=', 'users.id')
                ->where('users.id', '=', $id)->get();


            $f = count($user);
            if ($f == 0) abort(404, 'adminnnnn');;


            // dd($user);
            return view('user.show_public', compact('user'));


        }


    }


    public function news()
    {

        $id = Auth::user()->id;

        $news = DB::table('infos')->where('valid', '1')->
        orderByRaw('created_at DESC')->
        join('users', $id, '=', 'infos.user_id')->
        join('categories', 'categories.id', '=', 'infos.category_id')
            ->select('infos.*', 'categories.category_name', 'users.name', 'users.email')
            ->get();

        $categories = DB::table('infos')->
        join('categories', 'categories.id', '=', 'infos.category_id')
            ->get();

        // dd($news);
        return view('info.list', compact('news', 'categories'));

    }

}
