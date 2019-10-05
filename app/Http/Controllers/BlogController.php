<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    //method home memanggil view home
    public function home(){
		return view('home');
	}
 
    //method tentang memanggil view tentang
	public function tentang(){
		return view('tentang');
	}
 
    //method kontak memanggil view kontak
	public function kontak(){
		return view('kontak');
	}

}
