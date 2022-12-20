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

Route::get('locale', function () {
    return \App::getLocale();
});

Route::get('locale/{locale}', function ($locale) {
	\Session::put('locale', $locale);
    return redirect()->back();
});

Route::get('/', 'User\UserController@start');

Auth::routes([
    'register' => false,
    'reset' => false,
    'verify' => false,
]);

// Login
Route::post('/signup', 'User\UserController@signup_login');
Route::get('/signin', 'Auth\LoginController@redirectToProvider');
Route::get('/callback', 'Auth\LoginController@handleProviderCallback');

// Admin cms page
Route::group(['prefix'=>'admin', 'middleware' => 'roles', 'roles' => ['Admin', 'Editor']], function() {
	Route::get('/dashboard', 'Admin\AdminController@dashboard');
	Route::get('/users', 'Admin\AdminController@users');
    Route::get('/add-user', 'Admin\AdminController@add_user');
    Route::post('/create-user', 'Admin\AdminController@create_user');
	Route::delete('/delete-user/{id}', 'Admin\AdminController@delete_user');


	Route::get('/import-user', 'Admin\AdminController@import_user_view');
	Route::post('/import', 'Admin\AdminController@import_user');

	Route::get('/messages', 'Admin\AdminController@view_message');
	Route::delete('/delete-message/{id}', 'Admin\AdminController@delete_message');

	Route::get('/competition/{id}', 'Admin\AdminController@competition');
	Route::delete('/delete-competition/{id}', 'Admin\AdminController@delete_competition');

	Route::get('/language', 'Admin\AdminController@language');
    Route::get('/add-language', 'Admin\AdminController@add_language');
    Route::post('/create-language', 'Admin\AdminController@create_language');
	Route::delete('/delete-language/{id}', 'Admin\AdminController@delete_language');
	Route::get('/edit-language/{id}/edit', 'Admin\AdminController@edit_language');
	Route::post('/update-language/{id}', 'Admin\AdminController@update_language');

	Route::get('/langman', 'Admin\AdminController@langman');
});

// User cms page
Route::group(['middleware' => 'roles', 'roles' => ['User','Admin']], function() {
	Route::get('/home', 'User\UserController@index')->name('home');
	Route::post('/send-message', 'User\UserController@send_message');
	Route::post('/send-competition', 'User\UserController@send_competition');
	Route::get('/quiz', 'User\UserController@quiz');
	Route::post('/quiz/start', 'User\UserController@start_quiz');
	Route::post('/quiz/end', 'User\UserController@end_quiz');
	Route::post('/send-quiz', 'User\UserController@send_quiz');
	Route::get('/live-broadcast', 'User\UserController@live_broadcast')->name('live-broadcast');
	Route::get('/quiz-values', 'User\UserController@quiz_values');
});


