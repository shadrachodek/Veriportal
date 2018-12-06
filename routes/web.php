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

//Documents
Route::resource('/document', 'DocumentController');
Route::get('{owner}/select-document-type', 'DocumentController@documentType')->name('documentType');
Route::get('{owner}/{type}/document', 'DocumentController@selectedDocument')->name('selectedDocument');
Route::get('document/{document_id}/set-for-approval', 'DocumentController@setForApproval')->name('set.for.approval');

Route::view('select-owner-for-document-registration', 'back.document.select-owner-to-reg-doc')->name('select-owner-for-doc-reg');

Route::post('document/{owner_id}/certificate-of-occupancy', 'CofoController@store')->name('cofo.store');

Route::post('owner-that-need-document', 'OwnerController@getOwner')->name('owner-that-need-document');


Route::get('/document/{document}/receipt/', 'DocumentController@receipt')->name('doc.receipt');
Route::get('document/{document}/payments', 'DocumentController@loadPaymentPage')->name('doc.payments');
Route::post('document/{document_id}/payment', 'DocumentController@payment')->name('doc.payment');

Route::get('/batches', 'BatchController@index')->name('batch.index');
Route::get('/batches/{batch}/document/list', 'BatchController@list')->name('batch.list');
Route::get('/batches/document/{document}/view', 'BatchController@show')->name('batch.show');


Route::get('approved-documents', 'DocumentController@approveDocuments')->name('approved-document');
Route::get('approved/{document}/show', 'DocumentController@approvedShow')->name('approved-show');
Route::get('declined-documents', 'DocumentController@declineDocuments')->name('declined-document');
Route::get('preview{document}/document', 'DocumentController@previewDocument')->name('preview-document');


Route::get('/', function(){
    return view('auth.login');
});


Route::get('/dashboard', 'DashboardController@index')->name('dashboard');




Route::get('/home', 'HomeController@index')->name('home');


//login Routes...
$this->get('login', 'UserController@showLoginForm')->name('login');
$this->post('login', 'UserController@login');
$this->post('logout', 'UserController@logout')->name('logout');

// Registration Routes...
//$this->get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');

