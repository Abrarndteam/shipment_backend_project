<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controllers;
use App\Http\Controllers\codController;
use App\Http\Controllers\expenseController;
use App\Http\Controllers\shipmentController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('/registerUser', [Controller::class,'registerUser']);

// --------------------------------------------------------------------------------------------


Route::post('/loginUser', [controllers::class,'loginUser']);

// ---------------------------------------------------------------------------------------------


Route::post('/updateProfile',[controllers::class,'updateProfile']);

// ---------------------------------------------------------------------------------------------


Route::delete('/deleteUser',[controllers::class,'deleteUser']);

// ---------------------------------------------------------------------------------------------


Route::post("/uploadData",[codController::class,'uploadData']);

// ---------------------------------------------------------------------------------------------


Route::get('listData',[codController::class,'listData']);

// ---------------------------------------------------------------------------------------------


Route::post('/updateData',[codController::class,'updateData']);

// ---------------------------------------------------------------------------------------------


Route::delete('/deleteData',[codController::class,'deleteData']);

// ---------------------------------------------------------------------------------------------


Route::post("/uploadExp",[expenseController::class,'uploadExp']);

// ---------------------------------------------------------------------------------------------


Route::get('listExp',[expenseController::class,'listExp']);

// ---------------------------------------------------------------------------------------------


Route::post('/updateExp',[expenseController::class,'updateExp']);

// ---------------------------------------------------------------------------------------------


Route::delete('/deleteExp',[expenseController::class,'deleteExp']);

// ---------------------------------------------------------------------------------------------


Route::post("/uploadShipment",[shipmentController::class,'uploadShipment']);

// ---------------------------------------------------------------------------------------------


Route::get('listShipment',[shipmentController::class,'listShipment']);

// ---------------------------------------------------------------------------------------------


Route::post('/updateShipment',[shipmentController::class,'updateShipment']);

// ---------------------------------------------------------------------------------------------


Route::delete('/deleteShipment',[shipmentController::class,'deleteShipment']);

// ----------------------------------------------------------------------------------------------


Route::get('/searchShipment/{D_consignment_no_box}',[shipmentController::class,'searchShipment']);
