<?php

namespace App\Http\Controllers;

use App\User;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Middleware\admin;
use App\Http\Middleware\karyawan;

class RegisterController extends Controller
{
    use ValidatesRequests;

    public function index(){
        return view ('register.index');
    }

    public function store(Request $request){

        $validatedData = $request->validate([
            'name'=>['required','min:3','max:32','unique:users,name'],
            'email'=>'required|email|unique:users,email',
            'password'=>'required|min:6'
        ]);
        $validatedData['password'] = bcrypt($request->password);

        // $data=([
        //     'name'=> $request->get('name'),
        //     'email'=> $request->get('email')
        // ]);

        $email = $request->get('email');
        // Mail::to($email)->send(new WelcomeMail($data));

        $test=Mail::send('emails.welcome',  $validatedData, function ($mail) use ($email) {
            $mail->to($email, 'no-reply')->subject('Information Account');
            $mail->from('111201911661@mhs.dinus.ac.id', 'testlaravel');
        });

        User::create($validatedData);

        $request->session()->flash('success', 'Registrasi Berhasil Silakan Login');
        return redirect('/login');
    }
}
