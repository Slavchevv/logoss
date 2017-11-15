<?php
use Illuminate\Support\Facades\Storage;

Route::get('/', function () {
    return view('home');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::get('test', function () {
    echo 123;
    $s3 = Storage::disk('s3');
    $s3->put('myfile.txt','my file!','public');
});


Route::post('/contact/submit', 'MessagesController@submit');