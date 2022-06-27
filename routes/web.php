<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use App\Http\Controllers\categorycontoller;
use App\Http\Controllers\customerController;
use App\Http\Controllers\medicineController;
use App\Http\Controllers\nursingfacilityController;
use App\Http\Controllers\orderController;
use App\Http\Controllers\salesController;

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
Route::get('/logout', function () {
    if (session()->has('admin_email'))
    {
        session()->flush();
    }
    return redirect('admin');
});

Route::get('/admin', function () {
    if(session()->has('admin_email')){
        return redirect('dashboard');
    }
    return view('adminlogin');
});

Route::post('/adminlogin',[admincontroller::class,'logintest']);
Route::get('/dashboard',[admincontroller::class,'dashboard']);

Route::get('/addmedicine',[admincontroller::class,'addmedicine']);

Route::get('/purchasereport',[admincontroller::class,'purchasereport']);
Route::get('/salesreport',[admincontroller::class,'salesreport']);
Route::get('/medcategory',[admincontroller::class,'medcategory']);
Route::get('/viewprescription{id}',[admincontroller::class,'viewprescription']);


Route::get('/addnursingfacilities',[admincontroller::class,'addnursingfacilities']);
Route::post('/savenursingfacility',[nursingfacilityController::class,'savenursingfacility']);
Route::post('/createcategory',[categorycontoller::class,'createcategory']);
Route::get('/allcategories',[categorycontoller::class,'allcategories']);
Route::get('/nursingfacilities',[nursingfacilityController::class,'getnursingfacility']);
Route::get('/deletecategory{id}',[categorycontoller::class,'deletecategory']);
Route::get('/deletenursingfacility{id}',[nursingfacilityController::class,'deletenursingfacility']);
Route::get('/editnursingfacility{id}',[nursingfacilityController::class,'editnursingfacility']);
Route::post('/updatenursingfacility',[nursingfacilityController::class,'updatenursingfacility']);


Route::get('/orders',[orderController::class,'getorder']);
Route::get('/editorder{id}',[orderController::class,'editorder']);
Route::get('/vieworder{id}',[orderController::class,'vieworder']);
Route::post('/updateorder',[orderController::class,'updateorder']);
Route::get('/deleteorder{id}',[orderController::class,'deleteorder']);
Route::get('/approverecord{id}',[orderController::class,'approverecord']);
Route::get('/declinerecord{id}',[orderController::class,'declinerecord']);

Route::get('/customers',[customerController::class,'getcustomer']);
Route::get('/editcustomer{id}',[customerController::class,'editcustomer']);
Route::get('/deletecustomer{id}',[customerController::class,'deletecustomer']);
Route::post('/savecustomerdata',[customerController::class,'savecustomerdata']);

Route::get('/editmedicine{id}',[medicineController::class,'editmedicine']);
Route::get('/deletemedicine{id}',[medicineController::class,'deletemedicine']);
Route::post('/savemedicinedata',[medicineController::class,'savemedicinedata']);
Route::get('/medicines',[medicineController::class,'getMedicine']);
Route::post('/savemedicine',[medicineController::class,'savemedicine']);

Route::get('/sales',[orderController::class,'getsales']);


