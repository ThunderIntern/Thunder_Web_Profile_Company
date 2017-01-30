<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function create(){
         return view('/layout/project');
    }
    public function store(Request $request){
      $this->validate($request,[
            'email' => 'bail|required',
            'bisnis' => 'required',
            'overview'=> 'bail|required|max:5',

    ]);
    }
}
