<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $id = User::find(Auth::id());
        $id= $id->id;


        $news=DB::table('infos')->where('user_id',$id)->
        orderByRaw('created_at DESC')->
        join('users', 'users.id', '=', 'infos.user_id')->
        join('categories', 'categories.id', '=', 'infos.category_id')
            ->select('infos.*', 'categories.category_name','users.name','users.email')
            ->paginate(5);



        // dd($id);
        return view('home',compact('news'));
    }
}
