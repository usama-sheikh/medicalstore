<?php

use App\Http\Controllers\Api\ApiController;
use App\Http\Controllers\Api\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dummyapi;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API Routes for your application. These
| Routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);
Route::middleware('auth:api')->group(function () {
    Route::get("get/order/data",[ApiController::class,'getOrderData']);
    Route::get("get/medicine/data",[ApiController::class,'getMedicineData']);
    Route::get("get/nursing/facilities/data",[ApiController::class,'getNursingFacilitiesData']);
    Route::get("get/user/data",[ApiController::class,'getUserData']);
    Route::get("get/customer/data",[ApiController::class,'getCustomerData']);
    Route::get("get/order/detail/data/{id}",[ApiController::class,'getOrderDetailData']);
    Route::post("add/to/cart/product",[ApiController::class,'addToCart']);
    Route::get("get/user/cart/data/{id}",[ApiController::class,'getProductCart']);
    Route::post("remove/from/cart/product",[ApiController::class,'removeFromCart']);
    Route::post("user/change/password",[ApiController::class,'changePassword']);
    Route::post("place/order",[ApiController::class,'placeOrder']);
    Route::post("upload/prescription",[ApiController::class,'uploadPrescription']);
    Route::get("get/user/profile/data",[ApiController::class,'getUserProfile']);
    Route::post("update/user/profile/data",[ApiController::class,'updateUserProfile']);
    Route::get("get/user/address/management",[ApiController::class,'addressManagement']);
});
/*

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("getorderdata",[ApiController::class,'getorderdata']);
Route::get("getmedicinedata",[dummyapi::class,'getmedicinedata']);
Route::get("getnursingfacilitiesdata",[dummyapi::class,'getnursingfacilitiesdata']);
Route::get("getadmindata",[dummyapi::class,'getadmindata']);
Route::get("getuserdata",[dummyapi::class,'getuserdata']);
Route::get("getcustomerdata",[dummyapi::class,'getcustomerdata']);
Route::get("getorderdetaildata",[dummyapi::class,'getorderdetaildata']);*/

