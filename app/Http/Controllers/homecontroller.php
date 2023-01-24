<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Author;
use DB;
class homecontroller extends Controller
{
 public function general()
 {  
     $data = DB::table('authors')->where('Category', 'General')->get();
     return view('general', compact('data'));
 }
 public function novel()
 {  
     $data1 = DB::table('authors')->where('Category', 'Novels')->get();
     return view('novels', compact('data1'));
 }
 public function comics()
 {  
     $data2 = DB::table('authors')->where('Category', 'Comics')->get();
     return view('comics', compact('data2'));
 }
 public function story()
 {  
     $data3 = DB::table('authors')->where('Category', 'Story')->get();
     return view('story', compact('data3'));
 }
 public function quiz()
 {  
     $data4 = DB::table('authors')->where('Category', 'Quiz')->get();
     return view('Quiz', compact('data4'));
 }

 public function winner()
 {  
     $data5 = DB::table('cruds')->where('Winner', 'winner')->get();
     return view('Winner', compact('data5'));
 }
}
