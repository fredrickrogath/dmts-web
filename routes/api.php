<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('/test', function () {
//     // return json_encode(\App\Models\User::paginate(5));
//     $data = \App\Models\User::paginate(2);
//     return response()->json($data);
// });


//API route for register new user
Route::post('/register', [\App\Http\Controllers\Api\AuthController::class, 'register']);
//API route for login user
Route::post('/login', [App\Http\Controllers\Api\AuthController::class, 'login']);

// Route::post('/login', function(){
//     return json_encode('hello');
// } );

Route::group(['middleware' => ['auth:sanctum']], function() {    

    Route::post('/googleFitData', [App\Http\Controllers\Api\MobileController::class, 'googleFitData']);

    Route::post('/logout', [App\Http\Controllers\Api\AuthController::class, 'logout']);
  });