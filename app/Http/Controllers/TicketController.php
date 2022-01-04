<?php

namespace App\Http\Controllers;


use App\Exports\PostsExport;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Models\Requests;
use App\Models\Posts;

class TicketController extends BaseController
{
    public function index(){
        return view("ticket.index");
    }

    public function create(Request $request){
        $validatedData = $request->validate([
            'judul'=>['required','min:3','max:32',],
            'deskripsi'=>'required',
        ]);

        $validatedData['status']="Listed";
        $validatedData['user_id']=auth()->user()->id;
        Requests::create($validatedData);
        $request->session()->flash('success', 'Request Berhasil dikirim');
        return redirect('/posts');
    }
}
