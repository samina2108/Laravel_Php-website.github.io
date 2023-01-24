<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\fetch;

class FetchController extends Controller
{
    //
    public function search()
{

$search_text= $_GET['query'];
$data=fetch::query()
->where('AuthorName', 'LIKE' , '%' .$search_text. '%')
->orwhere('BookTitle', 'LIKE' , '%' .$search_text. '%')
->orwhere('Description', 'LIKE' , '%' .$search_text. '%')
->orwhere('BookImage', 'LIKE' , '%' .$search_text. '%')
->orwhere('Price', 'LIKE' , '%' .$search_text. '%')
->orwhere('Category', 'LIKE' , '%' .$search_text. '%')
->orwhere('created_at', 'LIKE' , '%' .$search_text. '%')
->orwhere('updated_at', 'LIKE' , '%' .$search_text. '%')
->get();

return view('search',compact('data'));


}
}
