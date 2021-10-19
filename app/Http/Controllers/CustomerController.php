<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Http\Requests\addCustomerRequest;

class CustomerController extends Controller
{
    public function getCustomer(){
        return response()->json(Customer::all(), 200);
    }

    public function getCustomerById($id){

        $customer = Customer::find($id);
        if(is_null($customer)){
            return response()->json(['message' => 'Cliente não encontrado'], 404);
        }

        return response()->json($customer::find($id), 200);
    }

    public function addCustomer(Request $request){
       $customer = $request->all();
       $customer['dt_nascimento'] = date('Y-m-d', strtotime($customer['dt_nascimento']));
       $customer = Customer::create($customer);
       return response($customer, 201);
    }

    public function updateCustomer(Request $request, $id) {
        $customer = Customer::find($id);
        if(is_null($customer)){
            return response()->json(['message' => 'Cliente não encontrado'], 404);
        }
        $customer->update($request->all());
        return response($customer, 200);
    }

    public function deleteCustomer(Request $request, $id){
        $customer = Customer::find($id);
        if(is_null($customer)){
            return response()->json(['message' => 'Cliente não encontrado'], 404);
        }
        $customer->delete();
        return response()->json(['message' => 'Cliente deletado'], 200); // 204  no content

    }
}
