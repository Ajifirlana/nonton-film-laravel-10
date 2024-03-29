<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
   public function index(){
   // echo "oke";
    return view('frontend.login.index');
   }
}
