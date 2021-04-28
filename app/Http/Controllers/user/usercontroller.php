<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class usercontroller extends Controller
{

    public function home(){
        return view('user.index');
    }

    public function about(){
        return view('user.aboutus');
    }



    public function allproduct(){
        return view('user.allproduct');
    }

    public function singleproduct(){
        return view('user.singleproduct');
    }


}
