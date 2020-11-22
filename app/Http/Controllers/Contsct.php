<?php

namespace App\Http\Controllers;
use App\contact;
use Illuminate\Http\Request;

class Contsct extends Controller
{
    public function contactus()
   {

    request()->validate([
        'name' => 'required',
        'email' => 'required',
        'comment' => 'required',
    ]);

       $data= new contact;
       $data->name =request('name');
       $data->email= request('email');
       $data->comment= request('comment');
       $data->save();
       return redirect('contact');
   }
}
