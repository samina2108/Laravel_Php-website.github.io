<?php

namespace App\Http\Controllers;
use App\User;
use Auth;
use Hash;
use Illuminate\Http\Request;

class logincontroller extends Controller
{
    public function __construct()
{
  $this->middleware('checkdata')->except('login','contact','registration');
}

public function contact() {
  return view('contactus');
}

public function profile12()
{
  return view ('profile');
}
    public function registration(Request $res){
      $res->validate([
        'name' => 'required|string|min:3',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:8',
        'confirm' => 'required|same:password'
      ]);
      $enc = Hash::make($res->password);
      $reg = new User();
      $reg->name = $res->name;
      $reg->email = $res->email;
      $reg->password = $enc;
      $reg->save();
      return redirect('login')->with('msg','register successfully');
    }

    public function login(Request $res){
        $res->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
          ]);
     $credential = $res->only('email','password');
    
     if(Auth::attempt($credential)){
        return redirect('profile')->with('msg1','login successfully');
     }else{
         return redirect('login')->with('msg2','username and password does not matched');
     }
    }


    public function logout(){
        Auth::logout();
        return redirect('login')->with('msg3','logout user successfully'); 
    }
}
