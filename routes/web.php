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

Route::get('/', 'FrontController@mainPage');
Route::get('/checkout', function () {
    return view('front.checkout');
});
Route::get('/search', function () {
    return view('front.search');
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

Route::group(['middleware' => ['auth', 'allowGoToAdmin']], function () {
  Route::get('/laravel-filemanager', '\Unisharp\Laravelfilemanager\controllers\LfmController@show');
  Route::post('/laravel-filemanager/upload', '\Unisharp\Laravelfilemanager\controllers\UploadController@upload');
  // list all lfm routes here...
});

Route::group(['prefix' => '/admin', 'middleware' => 'allowGoToAdmin'], function () {
	Route::get('/', function () {
		return view("ad.dashboard.dashboard");
	});
	Route::prefix('/users')->group(function () {
    Route::get('/', 'UserController@_list')->middleware("userView");
    Route::get('/create', 'UserController@_new')->middleware("userCreate");
    Route::post('/create', 'UserController@create')->middleware("userCreate");
    Route::get('/edit/{id}', 'UserController@edit')->middleware("userUpdate");
    Route::post('/update', 'UserController@update')->middleware("userUpdate");
    Route::get('/profile', 'UserController@myProfile');
    Route::get('/profile/{id}', 'UserController@profile')->middleware("viewListAllAddress");
    Route::post('/destroy', 'UserController@destroy')->middleware("viewListAllAddress");
  });

  Route::prefix('/address')->group(function () {
    Route::get('/', 'AddressController@_list');
    Route::get('/list-all', 'AddressController@_listAll')->middleware("viewListAllAddress");
    Route::get('/create', 'AddressController@_new');
    Route::post('/create', 'AddressController@create');
    Route::get('/edit/{id}', 'AddressController@edit');
    Route::post('/update', 'AddressController@update');
    Route::post('/destroy', 'AddressController@destroy');
  });

  Route::prefix('/categories')->group(function () {
    Route::get('/', 'CategoriesController@_list')->middleware("categoryView");
    Route::get('/create', 'CategoriesController@_new')->middleware("categoryCreate");
    Route::post('/create', 'CategoriesController@create')->middleware("categoryCreate");
    Route::get('/edit/{id}', 'CategoriesController@edit')->middleware("categoryUpdate");
    Route::post('/update', 'CategoriesController@update')->middleware("categoryUpdate");
    Route::post('/destroy', 'CategoriesController@destroy')->middleware("categoryDestroy");
  });

  Route::prefix('/teachers')->group(function () {
    Route::get('/', 'TeacherController@_list')->middleware("teacherView");
    Route::get('/list-all', 'TeacherController@_listAll')->middleware("teacherViewAll");
    Route::get('/create', 'TeacherController@_new');
    Route::post('/create', 'TeacherController@create')->middleware("teacherCreate");
    Route::get('/edit/{id}', 'TeacherController@edit');
    Route::post('/update', 'TeacherController@update')->middleware("teacherUpdate");
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
    Route::get('/', 'CoursesController@_list')->middleware("courseView");
    Route::get('/list-all', 'CoursesController@_listAll')->middleware("courseViewAll");
    Route::get('/create', 'CoursesController@_new')->middleware("courseCreate");
    Route::post('/create', 'CoursesController@create')->middleware("courseCreate");
    Route::get('/edit/{id}', 'CoursesController@edit')->middleware("courseUpdate");
    Route::post('/update', 'CoursesController@update')->middleware("courseUpdate");
    Route::post('/destroy', 'CoursesController@destroy')->middleware("courseDestroy");
    Route::prefix('/branchs/{id}')->group(function () {
      Route::get('/', 'CourseBranchsController@_list');
      Route::get('/create', 'CourseBranchsController@_new');
      Route::post('/create', 'CourseBranchsController@create');
      Route::get('/edit/{branch_id}', 'CourseBranchsController@edit');
      Route::post('/update', 'CourseBranchsController@update');
      Route::post('/destroy', 'CourseBranchsController@destroy');
    });
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
