<?php
#use App\User;// uses model User.php
/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('pwdreset', function () {
    return view('auth/passwords/reset');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    /*Route::get('/',['middleware' => 'auth', function () {//ต้องผ่านการ login
        return view('welcome');
    }]);*/
    Route::get('/', function () {
    	return view('welcome');
	});
    Route::get('/contact', 'PagesController@Contact');
    Route::get('/abort', 'PagesController@Abort');
});

Route::group(['middleware' => 'web'], function () {
    /*Route::get('/',['middleware' => 'auth', function () {
        //return view('welcome',['titlepage'=>'Admin']);
    	return view('home');
	}]);*/
	Route::auth();
    Route::get('/home', 'HomeController@index');
    /*Route::get('/users', 'UsersController@index');
    Route::get('/users/create', 'UsersController@create');
    Route::get('/users/{id}/edit', 'UsersController@edit');*/
    Route::get('/profile', 'UsersController@profile');

    Route::resource('/users', 'UsersController');
});
