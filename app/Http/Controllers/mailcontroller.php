<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Input;

class mailcontroller extends Controller
{
    public function __construct(\illuminate\Http\Request $request)
    {
        $this->request  = $request;
    }

     public function send()
     {
    //\Illuminate\Support\Facades\Input = $request->input
    
    //1. validasi content email
        $rules      = ['email' => 'required|email', 'bisnis' => 'required', 'overview' => 'required'];

        $validating = Validator::make(Input::only('email', 'bisnis', 'overview'), $rules);

    //2a. jika validasi berhasil, kirim email
        if($validating->passes())
            {
                //$this->request->input('email') = Input::get('email')
                //disini fungsi kirim email
                Mail::to($this->request->input('email'))
                    ->send(new \App\Mail\MyMail(($this->request->input('email')),($this->request->input('bisnis')),($this->request->input('overview'))));
                return view('layout.success');
            }
    
    //2b. jika validasi gagal, kembalikan ke halaman utama dengan error
        else
            {
                return view('layout.modal1')->withErrors($validating->errors());
            }
    }

}
