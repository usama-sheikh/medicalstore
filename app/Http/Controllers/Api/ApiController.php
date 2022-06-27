<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\BaseController as BaseController;
use App\Http\Resources\Api\Cart\CartResource;
use App\Http\Resources\Api\Customer\CustomerResource;
use App\Http\Resources\Api\Medicine\MedicinesResource;
use App\Http\Resources\Api\Nursing\NursingResource;
use App\Http\Resources\Api\Order\OrderDetailRecourse;
use App\Http\Resources\Api\Order\OrderDetailResource;
use App\Http\Resources\Api\Order\OrderResource;
use App\Http\Resources\Api\User\UserResource;
use App\Models\cart;
use App\Models\customer;
use App\Models\medicine;
use App\Models\nursingfacilities;
use App\Models\order;
use App\Models\orderdetail;
use App\Models\prescription;
use App\Models\User;
use Illuminate\Http\Request;

class ApiController extends BaseController
{
    function getOrderData(): \Illuminate\Http\JsonResponse
    {
        $orders = order::orderBy('id', 'desc')->paginate(10);
        return $this->sendResponse(OrderResource::collection($orders), 'Order retrieved successfully.');
    }

    function getMedicineData(): \Illuminate\Http\JsonResponse
    {
        $medicines = medicine::orderBy('id', 'desc')->paginate(10);
        return $this->sendResponse(MedicinesResource::collection($medicines), 'Medicines retrieved successfully.');
    }

    function getNursingFacilitiesData(): \Illuminate\Http\JsonResponse
    {
        $nursingFacilities = nursingfacilities::orderBy('id', 'desc')->paginate(10);
        return $this->sendResponse(NursingResource::collection($nursingFacilities), 'Nursing facilities retrieved successfully.');
    }

    function getUserData(): \Illuminate\Http\JsonResponse
    {
        $users = User::orderBy('id', 'desc')->paginate(10);
        return $this->sendResponse(UserResource::collection($users), 'Users retrieved successfully.');
    }

    function getCustomerData(): \Illuminate\Http\JsonResponse
    {
        $customers = customer::orderBy('id', 'desc')->paginate(10);
        return $this->sendResponse(CustomerResource::collection($customers), 'Customers retrieved successfully.');
    }

    function getOrderDetailData($id): \Illuminate\Http\JsonResponse
    {
        $orderdetails = orderdetail::where('order_id', $id)->orderBy('id', 'desc')->paginate(10);
        return $this->sendResponse(OrderDetailRecourse::collection($orderdetails), 'Order details retrieved successfully.');
    }

    function addToCart(Request $request): \Illuminate\Http\JsonResponse
    {
        $this->validate($request, [
            'user_id' => 'required',
            'product_id' => 'required',
            'product_type' => 'required',
        ]);

        $data = $request->all();
        if ($request->product_type == 1) {
            $data['user_id'] = $request->user_id;
            $data['medicine_id'] = $request->product_id;
        } else if ($request->product_type == 2) {
            $data['user_id'] = $request->user_id;
            $data['nursing_id'] = $request->product_id;
        } else {
            $data = true;
        }

        $cart = cart::create($data);
        if ($cart)
            return $this->sendResponse($cart, 'Product added into cart successfully.');
        else
            return $this->sendError('Unable to add this product into cart.');
    }

    function getProductCart($id): \Illuminate\Http\JsonResponse
    {
        $cartItems = cart::where('user_id', $id)->with(['medicine', 'nursing'])->orderBy('id', 'desc')->paginate(10);
        return $this->sendResponse(CartResource::collection($cartItems), 'Cart items retrieved successfully.');
    }

    function removeFromCart(Request $request): \Illuminate\Http\JsonResponse
    {
        $this->validate($request, [
            'user_id' => 'required',
            'product_id' => 'required',
            'product_type' => 'required',
        ]);

        if ($request->product_type == 1) {
            $cart = cart::where('user_id', $request->user_id)->where('medicine_id', $request->product_id)->delete();
            if ($cart)
                return $this->sendResponse(true, 'Product removed from cart successfully.');

            else
                return $this->sendError('Unable to removed this product from cart.');
        } else if ($request->product_type == 2) {
            $cart = cart::where('user_id', $request->user_id)->where('nursing_id', $request->product_id)->delete();
            if ($cart)
                return $this->sendResponse(true, 'Product removed from cart successfully.');

            else
                return $this->sendError('Unable to removed this product from cart.');
        } else {
            return $this->sendError('Unable to removed this product from cart.');
        }

    }

    public function changePassword(Request $request): \Illuminate\Http\JsonResponse
    {
        $this->validate($request, [
            'user_id' => 'required',
            'password' => 'required',
        ]);

        $new_password = bcrypt($request->new_password);
        $change_password = User::find($request->user_id)->update(['password' => $new_password]);
        if ($change_password) {
            return $this->sendResponse($change_password, 'User password change successfully.');
        } else {
            return $this->sendError('Unable to change password.');
        }
    }

    public function placeOrder(Request $request): \Illuminate\Http\JsonResponse
    {
        $this->validate($request, [
            'customer_name' => 'required',
            'city' => 'required',
            'total' => 'required',
            'phone_no' => 'required',
            'order_item' => ['required'],
            'order_item.*.*' => ['required', 'string'],
        ]);

        $Order = new order;
        $Order->customer_name = $request->customer_name;
        $Order->city = $request->city;
        $Order->total = $request->total;
        $Order->phone_no = $request->phone_no;
        $Order->status = 'Pending';
        $Order->payment_method = 'COD';
        $Order->prescription = '';
        $Order->save();

        foreach ($request->order_item as $item) {
            if($item['product_type'] == 1){
                $Order_items = new orderdetail();
                $Order_items->order_id = $Order->id;
                $Order_items->medicine_id = $item['product_id'];
                $Order_items->Medicine_Name = $item['product_name'];
                $Order_items->Qantity = $item['product_qantity'];
                $Order_items->Price = $item['product_price'];
                $Order_items->save();
            }
            if($item['product_type'] == 2){
                $Order_items = new orderdetail();
                $Order_items->order_id = $Order->id;
                $Order_items->nursing_id = $item['product_id'];
                $Order_items->facility_Name = $item['product_name'];
                $Order_items->Qantity = $item['product_qantity'];
                $Order_items->Price = $item['product_price'];
                $Order_items->save();
            }
        }

        if ($Order) {
            return $this->sendResponse($Order, 'Order placed successfully.');
        } else {
            return $this->sendError('Unable to place order.');
        }
    }

    public function uploadPrescription(Request $request): \Illuminate\Http\JsonResponse
    {
        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/prescription/',$filename);
        }

        $uploadPrescription = new prescription;
        $uploadPrescription->prescription = $filename;
        if ($uploadPrescription->save()) {
            $uploadPrescription = [
                'id' => $uploadPrescription->id,
                'prescription' => $uploadPrescription->prescriptions,
                'created_at' => $uploadPrescription->created_at,
            ];
            return $this->sendResponse($uploadPrescription, 'Prescription uploaded successfully.');
        } else {
            return $this->sendError('Unable to upload prescription.');
        }
    }
    public function getUserProfile(Request $request): \Illuminate\Http\JsonResponse
    {
        return $this->sendResponse(auth()->user(), 'User profile data.');
    }
    public function updateUserProfile(Request $request): \Illuminate\Http\JsonResponse
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'address' => 'required',
        ]);

        $updateProfile = User::find(auth()->user()->id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
        ]);
        if ($updateProfile) {
            return $this->sendResponse($updateProfile, 'User profile update successfully.');
        } else {
            return $this->sendError('Unable to update user profile.');
        }
    }
    public function addressManagement(Request $request): \Illuminate\Http\JsonResponse
    {
        return $this->sendResponse(auth()->user()->address ?? 'No Address', 'User address get successfully.');
    }
}
