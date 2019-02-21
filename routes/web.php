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

Route::prefix('setting')->group(function () {
    Route::get('roles/view', 'SettingController@UserRoles')->name('setting.roles');
    Route::get('new.role-permissions', 'SettingController@UserNewRole')->name('setting.new.role-permissions');
    Route::post('new.role-permission', 'SettingController@UserNewRolePermissionStore')->name('setting.create.role.permission');
    Route::get('user-permission-roles/{role}/view_update', 'SettingController@UserEditRolePermission')->name('setting.role.view.update');
    Route::post('user-store-role/{role}/edit', 'SettingController@UserEditRolePermissionStore')->name('setting.store.role.permission');
    Route::get('user-store-role/{role}/delete', 'SettingController@UserDeleteRolePermissionStore')->name('setting.delete.role.permission');
    Route::get('/', 'SettingController@index')->name('setting.index');
    Route::get('cofo/type', 'CofoTypeController@index')->name('setting.cofo.type.index');
    Route::post('cofo/type/store', 'CofoTypeController@store')->name('setting.cofo.type.store');
    Route::get('cofo/type/{type}/destroy', 'CofoTypeController@destroy')->name('setting.cofo.type.destroy');
});

Route::prefix('stock')->group(function () {
    Route::get('materials-request', 'StockController@MaterialRequest')->name('stock.materials.request');
    Route::get('receive-item', 'StockController@ReceiveItem')->name('stock.receive.item');
    Route::post('material-request', 'StockController@MaterialRequestStore')->name('stock.material.request');
    Route::post('materials-request/{material_request_id}', 'StockController@MaterialRequestApproval')->name('stock.materials.request.approval');
});

Route::resource('stock', 'StockController');


Route::get('/owner/{owner}/photo-signature', 'OwnerController@photoSignature')->name('photo-signature');
Route::post('/owner/{owner}/photo', 'OwnerController@photo')->name('photo');
Route::post('/owner/{owner}/signature', 'OwnerController@signature')->name('signature');
Route::get('/total-document-owners', 'DashboardController@totalDocumentOwners');


//Documents
Route::resource('/document', 'DocumentController');
Route::resource('/print-job', 'PrintJobController');

Route::get('{owner}/select-document-type', 'DocumentController@documentType')->name('documentType');
Route::get('{owner}/{type}/document', 'DocumentController@selectedDocument')->name('selectedDocument');
Route::get('document/{document_id}/set-for-approval', 'DocumentController@setForApproval')->name('set.for.approval');
Route::view('select-owner-for-document-registration', 'back.document.select-owner-to-reg-doc')->name('select-owner-for-doc-reg');
Route::post('document/{owner_id}/certificate-of-occupancy', 'CofoController@store')->name('cofo.store');

Route::post('owner-that-need-document', 'OwnerController@getOwner')->name('owner-that-need-document');

Route::post('document/{document}/survey_plan_file_upload', 'CofoController@SurveyPlanUpload')->name('doc.survey_plan_file_upload');
Route::get('document/{document}/survey_plan', 'CofoController@SurveyPlan')->name('doc.survey_plan');



Route::get('/document/{document}/receipt/', 'DocumentController@receipt')->name('doc.receipt');
Route::get('document/{document}/payments', 'DocumentController@loadPaymentPage')->name('doc.payments');
Route::post('document/{document_id}/payment', 'DocumentController@payment')->name('doc.payment');

Route::get('/batches', 'BatchController@index')->name('batch.index');
Route::get('/batches/{batch}/document/list', 'BatchController@list')->name('batch.list');
Route::get('/batches/document/{document}/view', 'BatchController@show')->name('batch.show');


Route::get('approved-documents', 'DocumentController@approveDocuments')->name('approved-document');
Route::get('approved/{document}/show', 'DocumentController@approvedShow')->name('approved-show');
Route::get('declined-documents', 'DocumentController@declineDocuments')->name('declined-document');
Route::get('declined/{document}/show', 'DocumentController@declinedShow')->name('declined-show');
Route::get('document/{document}/preview', 'DocumentController@previewDocument')->name('preview-document');
Route::get('document/{document}/pdf-download', 'DocumentController@PdfDownload')->name('pdf-download');


Route::get('/', function(){
    return view('auth.login');
});

Route::get('/report', function(){
    return view('back.report.index');
})->name('report');



Route::get('/charts', 'DashboardController@showGraph');




Route::get('/dashboard', 'DashboardController@index')->name('dashboard');




Route::get('/home', 'HomeController@index')->name('home');


//login Routes...
$this->get('login', 'UserController@showLoginForm')->name('login');
$this->post('login', 'UserController@login');
$this->post('logout', 'UserController@logout')->name('logout');

// Registration Routes...
//$this->get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');

Route::get('qr-code', function () {
    return \SimpleSoftwareIO\QrCode\Facades\QrCode::size(500)->generate('Welcome to kerneldev.com!');
});

Route::get('user-list',  'DashboardController@userList')->name('user-list');

use Maatwebsite\Excel\Facades\Excel;
use App\Imports\OwnerDocumentImport;
use App\Imports\OwnersImport;

Route::get('/imports', function(){
   // return "jdjhd";

    Excel::import(new OwnerDocumentImport, 'area-ua.csv');
    Excel::import(new OwnerDocumentImport, 'area-u.csv');
});


