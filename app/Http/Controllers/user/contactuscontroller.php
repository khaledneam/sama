<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class contactuscontroller extends Controller
{
    public function contactus(){
        return view('user.contactus');
    }

    public function contactusform(Request $request){

        $data = request(['name','phone','email','msg']);

        Mail::to('samaair20212021@gmail.com')->send(new \App\Mail\contactus($data));

        return redirect('sama/contactus')->with('message','لقد تم ارسال الرساله');

    }


}
