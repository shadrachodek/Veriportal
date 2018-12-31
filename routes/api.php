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
    Route::get('get-certificate', 'Api\SignatureController@certificate');
    Route::get('set-certificate', 'Api\SignatureController@setCertificate');
    Route::get('get-signature', 'Api\SignatureController@getSignature');
    Route::apiResource('signature', 'Api\SignatureController');


    Route::apiResource('/documents', 'Api\DocumentController');
  //  Route::get('documents/{document_id}/set-for-approval', 'DocumentController@setForApproval')->name('set.for.approval');
    Route::apiResource('/owners', 'Api\OwnerController');

  //  Route::apiResource('/owners', 'Api\OwnerController');

    Route::prefix('owners')->group(function () {

       // Route::apiResource('{owner}/document/{document}', 'Api\DocumentController');
      //  Route::apiResource('/{owner}/documents', 'Api\OwnerDocumentController');
    });

    Route::get('document-ready-for-print', 'Api\PrintController@index');
    Route::get('set-for-approval-documents', 'Api\DocumentController@getAllSetForApprovalDocuments');
    Route::get('document-like/{document_id}/', 'Api\DocumentController@getDocumentLike');
    Route::get('batch-like/{batch_id}/', 'Api\BatchController@getBatchLike');
    Route::Patch('process-a-document/{document}', 'Api\DocumentController@DocumentStatusProcessor');
    Route::Patch('process-a-batch/{batch}', 'Api\BatchController@BatchStatusProcessor');
    Route::get('all-awaiting-document-on-a-batch/{batch}', 'Api\BatchController@allAwaitingDocumentOnABatch');
    Route::get('documents-with-approved-status', 'Api\DocumentController@AllApprovedDocument');
    Route::get('documents-with-denied-status', 'Api\DocumentController@AllDeniedDocument');


    Route::get('document/{document}/approval', 'Api\DocumentController@getDocumentByApproval');
    Route::get('document/{batch}/batch', 'Api\DocumentController@getDocumentUnderBatch');
   // Route::get('documents/denied', 'Api\DocumentController@getAllDenied');

    Route::get('document/{document_id}/detail', 'Api\DocumentController@getDocumentById');
    Route::post('document/status/update ', 'Api\DocumentController@callback');

});