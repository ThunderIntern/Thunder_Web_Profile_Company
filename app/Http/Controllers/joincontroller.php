<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Input;

class joincontroller extends Controller
{
    public function __construct(\illuminate\Http\Request $request)
    {
        $this->request  = $request;
    }

     public function send()
     {
    //\Illuminate\Support\Facades\Input = $request->input
    
    //1. validasi content email
        $rules      = ['email' => 'required|email', 'bidang' => 'required', 'upload'=>'required','letter' => 'required'];

        $validating = Validator::make(Input::only('email', 'bidang','upload','letter'), $rules);

    //2a. jika validasi berhasil, kirim email
        if($validating->passes())
            {
                //$this->request->input('email') = Input::get('email')
                //disini fungsi kirim email
                Mail::to($this->request->input('email'))
					->send(new \App\Mail\joinmail(($this->request->input('email')),($this->request->input('bidang')),($this->request->input('upload')),($this->request->input('letter'))));

				return redirect()->back();
            }
    
    //2b. jika validasi gagal, kembalikan ke halaman utama dengan error
        else
            {
                return redirect()->back()->withErrors($validating->errors());
            }
    }

}
