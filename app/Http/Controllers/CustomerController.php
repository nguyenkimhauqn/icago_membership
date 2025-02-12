<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //
    public function list()
    {
        return view('Customer.search');
    }

    public function search(Request $request)
    {
        $phone = $request->input('phone');
        $customer = Customer::where('phone', $phone)->first();
        
        if ($customer) {
            return response()->json($customer);
        } else {
            return response()->json(['message' => 'Không tìm thấy khách hàng'], 404);
        }
    }
    
}
