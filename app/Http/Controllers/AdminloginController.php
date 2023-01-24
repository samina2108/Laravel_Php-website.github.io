<?php

namespace App\Http\Controllers;
use App\adminlogin;
use Auth;
use Hash;
use DB;
use Session;
use Illuminate\Http\Request;
class AdminloginController extends Controller
{
    
   
    public function registration(Request $res){
      $res->validate([
        'name' => 'required|string|min:3',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:2',
        'confirm' => 'required|same:password'
      ]);
    //   $enc = Hash::make($res->password);
      $reg = new adminlogin();
      $reg->name = $res->name;
      $reg->email = $res->email;
      $reg->password = $res->password;
      $reg->save();
      return redirect('')->with('msg','register successfully');
    }

    public function login(Request $res){
        $res->validate([
            'email' => 'required|email',
            'password' => 'required|min:2',
          ]);
        
        
      
        $CRE = DB::table('adminlogins')->where(['email'=>$res->email,'password'=>$res->password])->first();
       
         if(null !== $CRE){
             $adminname = $CRE->name;
             $adminemail = $CRE->email;
             session(['adminuser' => $adminname]);
             session(['adminemail' => $adminemail]);

         
             return redirect('Admin')->with('msg21','login successfully');
         }else{
            return redirect('Adminlogin')->with('msg22','username and password does not matched');
         }
   
    }


    public function logout(Request $request){
        Session::flush();
        return redirect('Adminlogin')->with('msg3','logout user successfully'); 
    }
  }

