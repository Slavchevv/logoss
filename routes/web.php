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
Route::get('/', 'HomeController@index')->name('home');
Auth::routes();
Route::get('/upload','UploadController@index')->name('upload');
Auth::routes();
Route::get('/books', 'UploadController@books')->name('books');
Route::get('/upload-file','UploadController@imageUpload')->name('upload-file');
Auth::routes();
Route::post('/upload-file','UploadController@imageUploadPost')->name('upload-file');
Auth::routes();
Route::get('/uploads','UploadController@uploads')->name('uploads');
Auth::routes();
Route::get('/uploads/{upload}','UploadController@show')->name('uploads.show');
Auth::routes();
Route::get('/uploads/{upload}/edit','UploadController@edit')->name('uploads.edit');
Auth::routes();
Route::put('/uploads/{upload}','UploadController@update')->name('uploads.update');
Auth::routes();
Route::delete('/uploads/{upload}','UploadController@destroy')->name('uploads.destroy');
Auth::routes();
Route::get('/author-works','UploadController@author_works')->name('author.works');
Auth::routes();
Route::resource('avtors', 'AvtorController');
Auth::routes();
Route::resource('categories', 'CategoryController');
Route::resource('admin', 'AdminController');
Route::get('/manage', 'AdminController@manage');
Route::get('/manage/pending', 'AdminController@manage_pending');
Route::get('/manage/rejected', 'AdminController@manage_rejected');
Route::get('/manage/approved', 'AdminController@manage_approved');
Route::post('/search-results', 'HomeController@search')->name('search');
Route::put('/uploads/{upload}','UploadController@save_book')->name('uploads.update');
Route::put('/admin/{admin}/{status}','AdminController@update');
//Route::get('autocomplete', array('as'=>'autocomplete', 'uses'=>'HomeController@autocomplete'));
//DELETE	/photos/{photo}	destroy	photos.destroy
//PUT/PATCH	/photos/{photo}	update	photos.update
//GET	/photos/{photo}/edit	edit	photos.edit
/*Auth::routes();
php artisan route:list

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');*/

Route::get('/logout', 'Auth\LoginController@logout')->name('logout' );
