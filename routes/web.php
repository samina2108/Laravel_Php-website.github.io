<?php

use Illuminate\Support\Facades\Route;



/*
|--------------------------------------------------------------------------
| Home controller Rout of category show in website
|--------------------------------------------------------------------------
*/
Route::get('/general', 'homecontroller@general');
Route::get('/novels', 'homecontroller@novel');
Route::get('/comics', 'homecontroller@comics');
Route::get('/story', 'homecontroller@story');
Route::get('/quiz', 'homecontroller@quiz');
Route::get('/winner', 'homecontroller@winner');



/*
|--------------------------------------------------------------------------
| web Views Rout of pages show in website
|--------------------------------------------------------------------------
*/
Route::get('/header', function () {
    return view('header');
});

Route::get('/Author', function () {
    return view('Author');
})->middleware('adminauth');


Route::get('/', function () {
    return view('index');
});
Route::get('register', function () {
    return view('register');
});


/*
|--------------------------------------------------------------------------
|  Authors edit and delet  Function AuthorController
|--------------------------------------------------------------------------
*/

Route::post('/form1', 'AuthorController@Author');
Route::get('/Allbooks', 'AuthorController@Authorshow')->middleware('adminauth');
Route::get('/delete1/{id?}', 'AuthorController@Authordelete');
Route::get('/edit1/{id?}', 'AuthorController@Authoredit');
Route::post('/authorupdate', 'AuthorController@Authorupdate');


/*
|--------------------------------------------------------------------------
| Rout OF login controller user Login Work logincontroller
|--------------------------------------------------------------------------
*/

Route::post('userreg','logincontroller@registration');
Route::post('userlog','logincontroller@login');
Route::get('log','logincontroller@logout');

Route::get('contact','logincontroller@contact');

Route::get('login', function()
{
  return view('login');
})->middleware("checkdata1");

Route::get('profile','logincontroller@profile12');



/*
|--------------------------------------------------------------------------
| Web Routes Admin Work
|--------------------------------------------------------------------------
*/

Route::get('Adminregister', function () {
    return view('Adminregister');
})->middleware("adminauth1");

Route::get('Adminlogin', function()
{
  return view('Adminlogin');
})->middleware("adminauth1");

// Route::get('Admin', function()
// {
//   return view('Admin');
// })->middleware('adminauth');

Route::post('Adminreg','AdminloginController@registration');
Route::post('Adminlog','AdminloginController@login');

Route::post('Adminlogout','AdminloginController@logout');

Route::get('Admindash','logincontroller@Admin');
/*
|--------------------------------------------------------------------------
| Web Routes Admin Edit and Delet Work CrudController
|--------------------------------------------------------------------------
*/
Route::get('Userstory', 'CrudController@showadmin')->middleware('adminauth');
Route::get('Admin', 'CrudController@showadmin')->middleware('adminauth');


Route::get('/timeline', 'CrudController@timeline');
Route::get('/delete3/{id?}', 'CrudController@deletedata');
Route::get('/edit3/{id?}', 'CrudController@adminedit');
Route::post('/updatedata/{id?}', 'CrudController@Updatedata1');
Route::POST('/form','CrudController@crud01');


// SEARCH ROUTE

Route::get('search', 'FetchController@search');



