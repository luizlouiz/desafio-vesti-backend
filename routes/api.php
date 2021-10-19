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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// get all customers
Route::get('customer', 'CustomerController@getCustomer');

// get especific customer by id 
Route::get('customer/{id}', 'CustomerController@getCustomerById');

// add new customer
Route::post('addCustomer', 'CustomerController@addCustomer');

// update customer
Route::put('updateCustomer/{id}', 'CustomerController@updateCustomer');

// delete customer
Route::delete('deleteCustomer/{id}', 'CustomerController@deleteCustomer');
