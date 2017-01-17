<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class masterController extends Controller
{
    public function index()
    {
    	return view('layout/master');
    }
    public function show($id)
    {
    	$nilai="ini saya qorthoni";
    	return view('layout/single',['isi' => $nilai]);
    }
}
