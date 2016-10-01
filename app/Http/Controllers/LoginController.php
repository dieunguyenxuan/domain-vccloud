<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use App\User;
class LoginController extends Controller
{
    public function getLogin (){
      if(!Auth::check()){
        return view('login');
      }else{
        return redirect()->intended('/');
      }

    }
    public function postLogin(LoginRequest $request){
      $login = ['username' => $request->username,
                'password' => $request->password,
                'level'=>1
                ];
      if (Auth::attempt($login)) {
          return redirect()->intended('/');
    }else{
      return redirect() -> back();
          }
      }
      public function getLogout(){
        Auth::logout();
        return redirect()->route('getLogin');
      }
}
