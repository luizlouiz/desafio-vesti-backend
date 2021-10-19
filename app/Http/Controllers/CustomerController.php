<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Http\Requests\addCustomerRequest;

class CustomerController extends Controller
{
    public function getCustomer(){  //Lista todos os registros de cliente
        return response()->json(Customer::all(), 200);
    }

    public function getCustomerById($id){ //Lista cliente pelo ID

        $customer = Customer::find($id); //procura pelo id especificado
        if(is_null($customer)){  //verifica se foi encontrado
            return response()->json(['message' => 'Cliente não encontrado'], 404);
        }

        return response()->json($customer::find($id), 200);
    }

    public function addCustomer(Request $request){ //Adiciona novo cliente
       $customer = $request->all(); //recupera todos os dados
       $customer['dt_nascimento'] = date('Y-m-d', strtotime($customer['dt_nascimento'])); //formata a data de nascimento
       $customer = Customer::create($customer); //cria registro de cliente
       return response($customer, 201);
    }

    public function updateCustomer(Request $request, $id) { //Edita cliente cadastrado
        $customer = Customer::find($id); //procura pelo id especificado
        if(is_null($customer)){ //verifica se foi encontrado
            return response()->json(['message' => 'Cliente não encontrado'], 404);
        }
        $customer->update($request->all()); //atualiza registros modificados
        return response($customer, 200);
    }

    public function deleteCustomer(Request $request, $id){ //deleta registro de cliente
        $customer = Customer::find($id); //procura pelo is especificado
        if(is_null($customer)){ //verifica se foi encontrado
            return response()->json(['message' => 'Cliente não encontrado'], 404);
        }
        $customer->delete();
        return response()->json(['message' => 'Cliente deletado'], 200); // 204  no content

    }
}
