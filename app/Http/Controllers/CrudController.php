<?php

namespace App\Http\Controllers;
use App\crud;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    public function crud01(Request $res)
    {

        
        $filepdf = $res->file('load');
        $fileimage = $res->file('img');

        $pdfname = $res->file('load')->getClientOriginalName();
        $filename = $res->file('img')->getClientOriginalName();
       $us = new crud;

       $us->Name = $res->uname;
       $us->Description = $res->Description;
       $us->Category = $res->Cate;
       $us->Title	 = $res->title;
       $us->Pics = $res->file('img')->getClientOriginalName();
       $us->Upload = $res->file('load')->getClientOriginalName();
       $filepdf->move(public_path().'/uploads/pdf/', $pdfname);

       $fileimage->move(public_path().'/assets/images/', $filename);
        $us->save();
        return redirect('profile');
    }

    public function timeline(){
        $us = crud::all();
        return view('timeline', compact('us'));
    }

    public function showadmin(){
        $us = crud::all();
        return view('admin', compact('us'));
    }
       
    public function deletedata($id){

        $us =  crud::find($id);
        $us->delete();
        return redirect('Admin');
    }
    public function adminedit($res){
        $id = $res;
        $us = crud::find($id);

        return view('adminedit', compact('us'));
    }
    
    public function Updatedata1(Request $res,$id){
 
        $Updatedata1 = crud::find($id);
        $Updatedata1->Name = $res->uname;
        $Updatedata1->Winner = null;
        $Updatedata1->Description = $res->Description;
        $Updatedata1->Category = $res->Cate;
        $Updatedata1->Title = $res->title;
        $Updatedata1->Winner = $res->winner;
        $Updatedata1->Pics = $res->file('img')->getClientOriginalName();
        $Updatedata1->Upload = $res->file('load')->getClientOriginalName();


        $Updatedata1->update();

        return redirect('Userstory');
    }




    
}
