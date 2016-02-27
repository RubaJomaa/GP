<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class indexController extends Controller
{
    
     public function index(){
       return view('start');
  }
     public function signup(){
       return view('signup');
  }
    
     public function signin(){
       return view('signin');
  }
    
}