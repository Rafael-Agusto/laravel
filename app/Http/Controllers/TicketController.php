<?php

namespace App\Http\Controllers;


use App\Exports\PostsExport;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Models\Posts;
use App\Models\Requests;
use App\User;

class TicketController extends BaseController
{
    public function index(){
        return view("ticket.index");
    }

    public function show(){
        return view('ticket.listed',[
            "requests" => Requests::where('karyawan_id','=', null)->get(),
            "karyawan" => User::where('role_id','=',2)->get()
        ]);

    }

    public function myticket(){
        return view('ticket.mylist',[
            "requests" => Requests::where('karyawan_id','=', auth()->user()->id)->get(),
        ]);
    }

    public function assign(Request $request){
        $validatedData = $request->validate([
            'karyawan_id'=>'required|integer'
        ]);
        dd($validatedData);
        $validatedData['status']='Assigned';
        requests::where('id','=', $validatedData['id'])->update($validatedData);
        return redirect('/manage-ticket')->with('success','Request has been assigned');
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
