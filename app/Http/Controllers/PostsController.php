<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use App\User;
use Illuminate\Http\Request;

class PostsController extends Controller
{

    public function index(){
        return view('posts.index',[
            "posts" => Posts::all()
        ]);
    }

    public function mypost(){
        return view('posts.mypost',[
            "posts" => posts::where('user_id','=', auth()->user()->id)->get()
        ]);
    }

    public function formcreate(){
        return view('posts.create');
    }

    public function create(Request $request){
        $validatedData = $request->validate([
            'judul'=>['required','min:3','max:32','unique:posts,judul'],
            'slug'=>'required|unique:posts,slug',
            'isi'=>'required|min:6|max:255'
        ]);

        $validatedData['user_id']=auth()->user()->id;
        Posts::create($validatedData);
        $request->session()->flash('success', 'Post Berhasil dibuat');
        return redirect('/mypost');
    }

    public function destroy(Request $request)
    {
        $posts = posts::find($request->id);
        $posts -> delete();
        return redirect('/mypost')->with('success','Post Berhasil Dibuang!');
    }

    public function edit(Request $request){
        $posts = posts::where('id','=', $request->id)->first();
        return view('posts/update',[
            'posts'=> $posts
        ]);
    }

    public function update(Request $request){
        $validatedData = $request->validate
        ([
            'judul'=>['required','min:3','max:32','unique:posts,judul'],
            'slug'=>'required',
            'isi'=>'required|min:6|max:255'
        ]);
        posts::where('slug','=', $validatedData['slug'])->update($validatedData);
        return redirect('/mypost')->with('success','Edit Berhasil');
    }
}
