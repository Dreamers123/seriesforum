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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('profile','ProfileController');
Route::get('/user/profile','ProfileController@showProfile');
Route::resource('series','SeriesController');
Route::get('/user/{userId}/series','SeriesController@userseries');
Route::resource('quotes','QuoteController');
Route::get('/series/events/{event}','SeriesController@show');

//////////////////////////////////////////////


Route::get('adminregister','AdminRegisterController@create');
Route::post('adminregister','AdminRegisterController@store');
Route::get('adminlogin','AdminController@create');
Route::post('adminlogin','AdminController@store');
Route::get('logout','AdminController@destroy');

/////////////////////////////////////////////////

Route::group(['prefix' => 'api'], function () {
    Route::get('/', function () {
        return 'Abeer';
    });
});

Route::get('redirect-with-helper-shortcut', function () {
    return redirect()->away('quotes');
});

Route::get('redirect-with-array', function () {
    return redirect('series/create')
        ->with([session()->flash('message','Your post has been published')]);
});

Route::get('redirect-with-array', function () {
    return redirect('quotes')
        ->with(['error' => true, 'message' => 'Whoops!']);
});

Route::get('passing-data-to-views', function () {
    return view('dashboard')
        ->with('abeer', 'Prionty');
});

Route::get('test','testController@test');
Route::get('users','testController@users');


Route::get('admin','AdminController@dashboard')->middleware('admin');