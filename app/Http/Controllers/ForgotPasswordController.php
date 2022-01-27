<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Middleware\admin;
use App\Http\Middleware\karyawan;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class ForgotPasswordController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(){
        return view('login.forgot');
    }

    public function changepass(Request $request){
        $validatedData = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $validatedData['password'] = bcrypt($request->password);

        User::where('email' , $validatedData['email'])->update($validatedData);
        return redirect('/login')->with('success','Password Berhasil Diubah');
    }
}
