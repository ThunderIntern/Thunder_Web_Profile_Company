<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bladecontroller extends Controller
{
    public function modal(){
    	return view ('layout.modal1');
    }
}
