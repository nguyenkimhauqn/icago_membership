<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $fillable = [
        'transaction_id', 'transaction_date', 'type', 'quantity', 'total_amount', 'points_earned', 'points_used', 'customer_id'
    ];
}
