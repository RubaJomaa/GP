<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class homeController extends Controller
{
    public function calender(){
       return view('calender');
  }
    
     public function homePage(){
       return view('homePage');
  }
}
