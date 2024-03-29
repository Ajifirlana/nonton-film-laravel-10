<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AuthController extends Controller
{
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
            
              //return redirect()->intended('/');
              return redirect('login')
              ->withInput()
              ->withErrors(['login_gagal'=>'Login Berhasil']);
  
          }
  
          return redirect('login')
              ->withInput()
              ->withErrors(['login_gagal'=>'These credentials does not match our records']);
  
  
  
       }
}
