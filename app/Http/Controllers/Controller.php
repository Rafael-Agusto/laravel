<?php

namespace App\Http\Controllers;

use App\Http\Middleware\admin;
use App\Http\Middleware\karyawan;
use App\Exports\PostsExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Models\Posts;
use PDF;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(){
        if (Auth::check()){
            return redirect('/posts');
        }else{
            return view('login.index');
        }
    }

    public function forgot() {
        return view('auth.forgot-password');
    }

    public function export()
    {
        return Excel::download(new PostsExport, 'posts.xlsx');
    }

    public function get_pdf()
    {
    	$posts = Posts::all();
    	$pdf = PDF::loadview('posts.preview',['posts'=>$posts]);
    	return $pdf->stream('data-posts-pdf');
    }

    public function preview()
    {
    	$posts = Posts::all();
    	return view('posts/preview',['posts'=>$posts]);
    }
    // public function import()
    // {
    //     Excel::import(new PostsImport, 'posts.xlsx');

    //     return redirect('/posts')->with('success');
    // }

}
