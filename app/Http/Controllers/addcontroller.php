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
            $this->middleware('auth')->only('create');
        }


        public function create(){



            $id = User::find(Auth::id());

            $id= $id->id;

            $adds=DB::table('useradds')->where('user_id',$id)->
            select('useradds.*')
                ->get();


            $size= sizeof($adds);

            if($size==0){return view('user.create');}
           else{return redirect('/user/'.$id);}







            }

            //dd($adds);



          //  return view('user.create');






    public function store(Request $request){


        $request->validate([


            'first_name'=>'required',
            'last_name'=>'required',

            "phone" => 'required',


            "year" => 'required',
            'month' => 'required',
            "day" => 'required',


            "reshteh" => 'required',
            "uni" => 'required',
            "job" => 'required',
            "address" => 'required',
            'photo'=>'max:500',
            'filename'=>' max:500',
            'text'=>'required',


        ]);




        $id = User::find(Auth::id());

        $id= $id->id;

      //  dd($request);

      //  $add=Auth::User()->useradds()->create($request->except('_token'));
        $pic='null';
        if ($request->has('photo')) {
            $pic = $request->file('photo')->getClientOriginalName();
            $name = time() . $pic;
            $path = 'addimg/';
            $pic = $request->photo->move($path, $name);

        }

        $file='null';
        if ($request->has('filename')) {
            //


        $file= $request->file('filename')->getClientOriginalName();
        $namefile=time().$file;
        $path='addfile/';
        $file=$request->filename->move($path,$namefile);

    }



        useradds::create([
            'user_id' =>$id ,

            'first_name'=>$request['first_name'],
            'last_name'=>$request['last_name'],
            "year" => $request['year'],
              'month' => $request['month'],
              "day" => $request['day'],
              "phone" => $request['phone'],
              "tahsilat" => $request['tahsilat'],
              "reshteh" => $request['reshteh'],
              "uni" => $request['uni'],
              "job" => $request['job'],
              "address" => $request['address'],
            'photo'=>$pic,
            'marry'=>'0',
            'text'=>'asd',
            'filename'=>$file,

        ]);






        return redirect('/home');

       // dd($book);

    }




    public function edit($id){

        $id = User::find(Auth::id());
        $id= $id->id;


        $adds=DB::table('useradds')->where('user_id',$id)->
        select('useradds.*')
            ->get();
       // $addid= $adds->id;
        //dd($adds);
        return view('user.edit', compact('adds'));

        //dd($adds);


    }


    public function update(Request $request, $id){
            echo $id;
        $userid = User::find(Auth::id());
            //dd($id);

            dd($userid->id);
    }


}
