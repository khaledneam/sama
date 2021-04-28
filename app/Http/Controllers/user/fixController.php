<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Mail;

class fixController extends Controller
{

    public function fix(){
        return view('user.maintenance');
    }

    public function fixpost (Request $request)
    {

        $data = request(['name','address','phone','nameel','des']);

        \Illuminate\Support\Facades\Mail::to('samaair20212021@gmail.com')->send(new \App\Mail\fix($data) );

        return redirect('sama/fix')->with('message','message has sent');




    }



}
