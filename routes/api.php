<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix('v1')->group(function () {
    Route::middleware('auth:api')->get('/user', function (Request $request) {
        return $request->user();
    });

    Route::apiResource('/documents', 'Api\DocumentController');
  //  Route::get('documents/{document_id}/set-for-approval', 'DocumentController@setForApproval')->name('set.for.approval');
    Route::apiResource('/owners', 'Api\OwnerController');

    Route::apiResource('/owners', 'Api\OwnerController');

    Route::prefix('owners')->group(function () {

       // Route::apiResource('{owner}/document/{document}', 'Api\DocumentController');
      //  Route::apiResource('/{owner}/documents', 'Api\OwnerDocumentController');
    });
    Route::get('document/set-for-approval-documents', 'Api\DocumentController@getAllSetForApprovalDocuments');
    Route::get('document-like/{document_id}/', 'Api\DocumentController@getDocumentLike');
    Route::get('batch-like/{batch_id}/', 'Api\BatchController@getBatchLike');

    Route::get('document/{document}/', 'Api\DocumentController@getApprovalDocument');
    Route::get('document/{batch}/batch', 'Api\DocumentController@getDocumentUnderBatch');
    Route::get('documents/denied', 'Api\DocumentController@getAllDenied');
    Route::get('documents/approved', 'Api\DocumentController@getAllApproved');
    Route::get('document/{document_id}/detail', 'Api\DocumentController@getDocumentById');
    Route::post('document/status/update ', 'Api\DocumentController@callback');


});