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

//Route::get("alert/{AlertType}","sweetalertController@alert")->name("alert");


Route::resource('/user-management', 'UserController');
Route::resource('/owner', 'OwnerController');
Route::resource('/document', 'DocumentController');

Route::get('/', function(){
    return view('auth.login');
});

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::get('document/{document_id}/set-for-approval', 'DocumentController@setForApproval')->name('set.for.approval');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
