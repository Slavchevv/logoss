<?php
use Illuminate\Support\Facades\Storage;

Route::get('/', function () {
    return view('home');
});
Route::get('/contact', function () {
    return view('contact');
});



//Route::get('upload', function () {
    /*echo 123;
    $s3 = Storage::disk('s3');
    $s3->put('myfile.txt','my file!','public');*/
 //   return view('upload');
//});

Route::get('/upload','UploadController@imageUpload');
Route::post('/upload','UploadController@imageUploadPost');
Route::get('/upload', function () {
    return view('upload');
});

Route::post('/contact/submit', 'MessagesController@submit');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');*/

Route::get('/logout', 'Auth\LoginController@logout')->name('logout' );
