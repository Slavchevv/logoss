<?php
use Illuminate\Support\Facades\Storage;

Route::get('/', function () {
    return view('home');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/upload', function () {
    return view('upload');
});
Route::get('/upload-file', function () {
    return view('upload-file');
});
Route::get('/uploads', function () {
    return view('uploads');
});


Route::post('/contact/submit', 'MessagesController@submit');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();
Route::get('/upload','UploadController@index')->name('upload');
Auth::routes();
Route::get('/upload-file','UploadController@imageUpload')->name('upload-file');
Auth::routes();
Route::post('/upload-file','UploadController@imageUploadPost')->name('upload-file');
Auth::routes();
Route::get('/uploads','UploadController@uploads')->name('uploads');
Auth::routes();
/*Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');*/

Route::get('/logout', 'Auth\LoginController@logout')->name('logout' );
