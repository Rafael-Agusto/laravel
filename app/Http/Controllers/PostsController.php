<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use App\User;
use Illuminate\Http\Request;

class PostsController extends Controller
{

    public function index(){
        return view('posts.index',[
            "posts" => posts::all()
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
        return redirect('/posts');
    }

    public function destroy(posts $posts)
    {
        posts::destroy($posts->id);
        return redirect('/posts/mypost')->with('success','Post Berhasil Dibuang!');
    }
    
    public function update(Request $request, posts $posts){
        $rules = $request->validate
        ([
            'judul'=>['required','min:3','max:32','unique:posts,judul'],
            'slug'=>'required|unique:posts,slug',
            'isi'=>'required|min:6|max:255'
        ]);

        if($request->slug != $post->slug){
            $rules['slug']='required|unique:post';
        }

        $validatedData = $request->validate($rules);

        $validatedData['user_id']=auth()->user()->id;

        post::where('id', $posts->id)->update('$validateData');
        return redirect('/posts/mypost')->with('success','Edit Berhasil');
    }
}
