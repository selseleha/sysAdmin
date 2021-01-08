<?php

namespace App\Http\Controllers;

use App\comment;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{



    public function index()
    {

        $newcomments=comment::orderByRaw('valid')->join('infos', 'infos.id', '=', 'comments.new_id')->select('comments.*','infos.title')->paginate(5);




        return view('newcomment.index',compact('newcomments'));

    }


    public function create()
    {


    }



    public function store(Request $request)
    {

    }


    public function show(message $message)
    {
        //
    }


    public function edit($id)
    {
        //
        $comment=comment::findorfail($id);

        return view('newcomment.edit',compact('comment'));


    }


    public function update($id,Request $request){




        comment::where('id', $id)
            ->update(['comment' => $request->comment,

                'valid'=>$request->valid,


            ]);

        return redirect('/newcomment/list');


    }
    public function accept($id){

        comment::where('id', $id)
            ->update([

                'valid'=>'1',


            ]);

        return redirect('/newcomment/list');

    }

    public function destroy($id){

        comment::where('id', $id)
            ->delete();


        return redirect('/newcomment/list');

    }

    public function storecomment(Request $request,$id){




        $userid = User::find(Auth::id());
        $userid= $userid->id;

        // dd($request);
        $info=comment::create([

            'comment'=>$request['text'],
            'new_id'=>$id,
            'commentV'=>'0',
            'valid'=>'0',
            'user_id'=>$userid,

        ]);

        return redirect('/infos/'.$id);




    }



}
