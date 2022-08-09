<?php
Route::get('/','MainController@index');

Route :: get('/home', 'MainController@index');

Route :: get('/contact',function() {
    return view('layouts/contact');
});

Route :: get('/services',function() {
    return view('layouts/services');
});
Route :: get('/team',function() {
    return view('layouts/team');
});
Route :: get('/blog',function() {
    return view('layouts/blog');
});

Route::get('admin/users', function () {
    return view('admin/users');
});

Auth::routes();
Route::get('/layouts/home', 'HomeController@index')->name('/home');
Route::post('/users/store', 'UserController@store');


Route::resource('admin/users', 'UserController');

Route::get('users', 'UserController@index')->name('admin/users')
    ->middleware('auth');

Route::get('/dashboard', function () {
    return view('admin/mainpage');
});

Route::resource('/detail','PostController');
Route::resource('/aboutus','AboutusController');
Route::resource('/post','PostController');
Route::resource('/gallery','GalleryController');
Route::resource('/categories','CategoryController');
Route::resource('/create','ImageController');
Route::resource('/event','EventController');
Route::resource('/slider','SliderimageController');

//
//Route::get('/detail/{description}', function ($id) {
//    return view('admin/detail'.$id);
//});

