<?php
use Illuminate\Support\Facades\Storage;

/*Route::get('/', function () {
    return view('home');
});*/
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


Auth::routes();
Route::post('/contact/submit', 'MessagesController@submit');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index')->name('home');

Route::get('/upload','UploadController@index')->name('upload')->middleware('auth');

Route::get('/books', 'UploadController@books')->name('books');
Route::get('/upload-file','UploadController@imageUpload')->name('upload-file');

Route::post('/upload-file','UploadController@imageUploadPost')->name('upload-file');

Route::get('/uploads','UploadController@uploads')->name('uploads');

Route::get('/uploads/{upload}','UploadController@show')->name('uploads.show');

Route::get('/uploads/{upload}/edit','UploadController@edit')->name('uploads.edit');

Route::put('/uploads/{upload}','UploadController@update')->name('uploads.update');

Route::put('/edit-record/{id}','UploadController@update');

Route::get('/edit-record/{id}','AdminController@edit')->name('admin.update');

Route::delete('/uploads/{upload}','UploadController@destroy')->name('uploads.destroy');

Route::delete('/uploads/{upload}','UploadController@destroy')->name('uploads.destroy');

Route::get('/author-works','UploadController@author_works')->name('author.works');

Route::resource('avtors', 'AvtorController');

Route::resource('categories', 'CategoryController');
Route::resource('admin', 'AdminController');
Route::get('/manage', 'AdminController@manage');
Route::get('/manage/pending', 'AdminController@manage_pending');
Route::get('/manage/rejected', 'AdminController@manage_rejected');
Route::get('/manage/approved', 'AdminController@manage_approved');
Route::post('/search-results', 'HomeController@search')->name('search');
Route::put('/uploads/{upload}','UploadController@save_book')->name('savebook');
Route::put('/admin/{admin}/{status}','AdminController@update');
Route::get('/update-points', 'MessagesController@update_points');
/*Route::get('/download/{link}','HomeController@download');*/
Route::get('/download','HomeController@download')->name('download');
Route::get('/saved', 'UploadController@saved')->name('savedview');
//Route::get('/save-book','UploadController@save_book')->name('savebk');
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
