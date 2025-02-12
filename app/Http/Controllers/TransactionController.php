<?php

namespace App\Http\Controllers;
use App\Models\Transaction;

use Illuminate\Http\Request;

class TransactionController extends Controller
{
    //
    public function list($customerId)
    {   
        // dd("ok");
        $transactions = Transaction::where('customer_id', $customerId)->get();
        return response()->json($transactions);
    }
}
