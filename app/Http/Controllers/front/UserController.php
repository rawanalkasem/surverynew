<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\VerifiesEmails;


class UserController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->except('showUserName');
    }

     public function showUserName()
    {
        $data=['name','rawan','surename','alkasem'];
        

        return view('front.front')->with('data',$data);
    }
}