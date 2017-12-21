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
use App\Http\Middleware\AllowGoToAdmin;

Route::get('/', function () {
    return view('front.main');
});
Route::get('/checkout', function () {
    return view('front.checkout');
});
Route::prefix('/login')->group(function () {
  Route::get('/', 'LoginController@login');
  Route::post('/', 'LoginController@postLogin');
  Route::get('/logout', 'LoginController@logout');
  Route::get('/forgot', 'LoginController@forgot');
});
Route::get('/logout', 'LoginController@logout');

Route::get('/khoahoc', function () {
    return view('front.single');
});
// Route::get('/', 'test_controller@test');
Route::get('/blog/categories/a/1', function () {
    return view('bbbbb');
});

Route::get('/redirect/{social}', 'SocialAuthController@redirect');
Route::get('/callback/{social}', 'SocialAuthController@callback');
Route::get('/test', function(){
  return view('test');
});

Route::group(['prefix' => '/admin', 'middleware' => 'allowGoToAdmin'], function () {
	Route::get('/', function () {
		return view("ad.dashboard.dashboard");
	});
	Route::prefix('/users')->group(function () {
    Route::get('/', 'UserController@_list');
    Route::get('/create', 'UserController@_new');
    Route::post('/create', 'UserController@create');
    Route::get('/edit/{id}', 'UserController@edit');
    Route::post('/update', 'UserController@update');
    Route::get('/profile', 'UserController@myProfile');
    Route::get('/profile/{id}', 'UserController@profile');
    Route::post('/destroy', 'UserController@destroy');
	});

  Route::prefix('/categories')->group(function () {
    Route::get('/', 'CategoriesController@_list');
    Route::get('/create', 'CategoriesController@_new');
    Route::post('/create', 'CategoriesController@create');
    Route::get('/edit/{id}', 'CategoriesController@edit');
    Route::post('/update', 'CategoriesController@update');
    Route::post('/destroy', 'CategoriesController@destroy');
  });

  Route::prefix('/teachers')->group(function () {
    Route::get('/', 'TeacherController@_list');
    Route::get('/all', 'TeacherController@_listAll');
    Route::get('/create', 'TeacherController@_new');
    Route::post('/create', 'TeacherController@create');
    Route::get('/edit/{id}', 'TeacherController@edit');
    Route::post('/update', 'TeacherController@update');
    Route::post('/destroy', 'TeacherController@destroy');
  });

  Route::prefix('/course-types')->group(function () {
    Route::get('/', 'CoursesTypeController@_list');
    Route::get('/create', 'CoursesTypeController@_new');
    Route::post('/create', 'CoursesTypeController@create');
    Route::get('/edit/{id}', 'CoursesTypeController@edit');
    Route::post('/update', 'CoursesTypeController@update');
    Route::post('/destroy', 'CoursesTypeController@destroy');
  });

  Route::prefix('/courses')->group(function () {
    Route::get('/', 'CoursesController@_list');
    Route::get('/create', 'CoursesController@_new');
    Route::post('/create', 'CoursesController@create');
    Route::get('/edit/{id}', 'CoursesController@edit');
    Route::post('/update', 'CoursesController@update');
    Route::post('/destroy', 'CoursesController@destroy');
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
