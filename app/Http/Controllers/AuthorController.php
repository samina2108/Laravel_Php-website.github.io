<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;    

use App\Author;

class AuthorController extends Controller
{
    public function Author(Request $req)
    {
        $filepdf = $req->file('read');
        $fileimage = $req->file('image');

        $pdfname = $req->file('read')->getClientOriginalName();
        $filename = $req->file('image')->getClientOriginalName();


       $auth = new Author;

       $auth->AuthorName = $req->authname;
       $auth->BookTitle = $req->bktitle; 
       $auth->Description = $req->desp;
    
       $auth->BookImage = $req->file('read')->getClientOriginalName();
       $auth->Category = $req->Cat;
       $auth->Price = $req->price;
       $auth->UploadFile = $req->file('image')->getClientOriginalName();
    //    Storage::putFileAs( $filepath, $file, $filename );
       $filepdf->move(public_path().'/uploads/pdf/', $pdfname);

       $fileimage->move(public_path().'/assets/images/', $filename);

        $auth->save();
        return redirect('Author');
    }
    
    public function Authorshow(){
        $auth = Author::all();
        return view('Allbooks', compact('auth'));
    }

    public function Authordelete($id){

        $auth =  Author::find($id);
        $auth->delete();
        return redirect('Allbooks');
    }
    public function Authoredit($req){
        $id = $req;
        $auth = Author::find($id);

        return view('Authoredit', compact('auth'));
    }
    
    public function Authorupdate(Request $req){
 
        $id = $req->id;
        $Authorupdate = Author::find($id);
        $Authorupdate->AuthorName = $req->authname;
        $Authorupdate->BookTitle = $req->bktitle;
        $Authorupdate->Description = $req->desp;
        $Authorupdate->BookImage = $req->file('image')->getClientOriginalName();
        $Authorupdate->Category = $req->Cat;
        $Authorupdate->Price = $req->price;
        $Authorupdate->UploadFile = $req->file('read')->getClientOriginalName();

        $Authorupdate->update();

        return redirect('Allbooks');
    }
}
