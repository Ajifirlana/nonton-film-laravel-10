<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
   public function index(){
    return view('frontend.login.index');
   }
   public function proses_login(Request $request){
      $request->validate([
          'username'=>'required',
          'password'=>'required'
      ]);
  
     
      $credential = $request->only('username','password');

      if(Auth::attempt($credential)){
          $user =  Auth::user();
          if($user->level =='admin'){
              return redirect()->intended('admin');

          }
             else if($user->level =='user'){
              return redirect()->intended('user');
          }
        
          return redirect()->intended('/dashboard');
      }

      return redirect('login')
          ->withInput()
          ->withErrors(['login_gagal'=>'These credentials does not match our records']);

   }
}
