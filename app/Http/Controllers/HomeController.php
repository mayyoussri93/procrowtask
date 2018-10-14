<?php

namespace App\Http\Controllers;
use App\User;
use DeepCopy\f006\A;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Validator;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = User::all();
        return view('posts.index')->with('posts',$posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'fullname' => 'required',
            'email' => 'required|unique:posts',
            'password' => 'required',
        ]);
        $store = new User ();
        $store->name = $request->fullname;
        $store->email = $request->email;
        $store->password= $request->password;
        $store->save();
        return redirect('/posts')->with('success','down well');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = User::find($id);
        return view('posts.show')->with('info',$post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    { $post = User::find($id);
        return view('posts.edit')->with('info',$post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'fullname' => 'required',
            'email' => 'required|unique:posts',
            'password' => 'required',

        ]);

        $update =  User::find($id);
        $update->name = $request->fullname;
        $update->email = $request->email;
        $update->password= $request->password;

        $update->save();
        return redirect('/posts')->with('success','down well');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy =User::find($id);
        $destroy->delete();
        return redirect('/posts')->with('success','down well');

    }
}
