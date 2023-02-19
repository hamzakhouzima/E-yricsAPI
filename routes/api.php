<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlbumController;


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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/homePage', [AlbumController::class, 'index']);
Route::post('/storeData', [AlbumController::class, 'store']);
Route::post('/updateData/{id}', [AlbumController::class, 'update']);
Route::get('/showData/{id}' , [AlbumController::class , 'show']  );
Route::post('deleteData/{id}' , [AlbumController::class , 'destroy']);

// Route::post('/example', function () {
    
//     // Retrieve the input data from the request
//     $inputData = request()->all();
    
//     // Process the input data as needed
//     // ...
// dd($inputData);
//     // Return a JSON response with the result of the processing
//     return response()->json(['result' => 'success']);
// });