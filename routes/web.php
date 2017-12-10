<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/blog/categories/a/1', function () {
    return view('bbbbb');
});



Route::prefix('admin')->group(function () {
	Route::get('/', function () {
		return view("ad.dashboard.dashboard");
	});
	Route::prefix('/users')->group(function () {
		Route::get('/profile', function () {
			return view("ad.user.profile");
		});
    Route::get('/', 'UserController@list');
    Route::get('/create', 'UserController@_new');
    Route::post('/create', 'UserController@create');
	});

	Route::prefix('/files')->group(function () {
		Route::get('/', function () {
			return view("ad.files.list");
		});
		Route::post('/upload',"backend\_files\uploadController@upload");
	});
	Route::prefix('/pages')->group(function () {
		Route::get('/blank', function () {
			return view("ad.layouts.blank_page");
		});
		Route::get('/create', function () {
			return view("ad.pages.create");
		});
	});

    Route::get('galleries', function () {
        return "ahihi đồ ngốkc ))";
    });
});
