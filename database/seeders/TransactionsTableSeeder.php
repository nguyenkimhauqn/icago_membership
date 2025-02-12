<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class TransactionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $transactions = [
            ['transaction_id' => 'GD00001', 'transaction_date' => null, 'type' => 'Kinh tế', 'quantity' => 1, 'total_amount' => 1000, 'points_earned' => 100, 'points_used' => 10, 'customer_id' => 10],
            ['transaction_id' => 'GD00002', 'transaction_date' => null, 'type' => 'Thương gia', 'quantity' => 1, 'total_amount' => 1000, 'points_earned' => 100, 'points_used' => 10, 'customer_id' => 11],
            ['transaction_id' => 'GD00003', 'transaction_date' => null, 'type' => 'Thương gia', 'quantity' => 1, 'total_amount' => 1000, 'points_earned' => 100, 'points_used' => 10, 'customer_id' => 12],
            ['transaction_id' => 'GD00004', 'transaction_date' => null, 'type' => 'Thương gia', 'quantity' => 1, 'total_amount' => 1000, 'points_earned' => 100, 'points_used' => 10, 'customer_id' => 13],
            ['transaction_id' => 'GD00005', 'transaction_date' => null, 'type' => 'Thương gia', 'quantity' => 1, 'total_amount' => 1000, 'points_earned' => 100, 'points_used' => 10, 'customer_id' => 14],
            ['transaction_id' => 'GD00006', 'transaction_date' => null, 'type' => 'Thương gia', 'quantity' => 1, 'total_amount' => 1000, 'points_earned' => 100, 'points_used' => 10, 'customer_id' => 15],
            ['transaction_id' => 'GD00007', 'transaction_date' => null, 'type' => 'Thương gia', 'quantity' => 1, 'total_amount' => 1000, 'points_earned' => 100, 'points_used' => 10, 'customer_id' => 16],
            ['transaction_id' => 'GD00008', 'transaction_date' => null, 'type' => 'Thương gia', 'quantity' => 1, 'total_amount' => 1000, 'points_earned' => 100, 'points_used' => 10, 'customer_id' => 17],
            ['transaction_id' => 'GD00009', 'transaction_date' => null, 'type' => 'Thương gia', 'quantity' => 1, 'total_amount' => 1000, 'points_earned' => 100, 'points_used' => 10, 'customer_id' => 18],
            ['transaction_id' => 'GD00010', 'transaction_date' => null, 'type' => 'Thương gia', 'quantity' => 1, 'total_amount' => 1000, 'points_earned' => 100, 'points_used' => 10, 'customer_id' => 10],
            ['transaction_id' => 'GD00011', 'transaction_date' => null, 'type' => 'Thương gia', 'quantity' => 1, 'total_amount' => 1000, 'points_earned' => 100, 'points_used' => 10, 'customer_id' => 11],
            ['transaction_id' => 'GD00012', 'transaction_date' => null, 'type' => 'Thương gia', 'quantity' => 1, 'total_amount' => 1000, 'points_earned' => 100, 'points_used' => 10, 'customer_id' => 12],
            ['transaction_id' => 'GD00013', 'transaction_date' => null, 'type' => 'Thương gia', 'quantity' => 1, 'total_amount' => 1000, 'points_earned' => 100, 'points_used' => 10, 'customer_id' => 13],
            ['transaction_id' => 'GD00014', 'transaction_date' => null, 'type' => 'Thương gia', 'quantity' => 1, 'total_amount' => 1000, 'points_earned' => 100, 'points_used' => 10, 'customer_id' => 14],
            ['transaction_id' => 'GD00015', 'transaction_date' => null, 'type' => 'Thương gia', 'quantity' => 1, 'total_amount' => 1000, 'points_earned' => 100, 'points_used' => 10, 'customer_id' => 15],
            ['transaction_id' => 'GD00016', 'transaction_date' => null, 'type' => 'Thương gia', 'quantity' => 1, 'total_amount' => 1000, 'points_earned' => 100, 'points_used' => 10, 'customer_id' => 16],
            ['transaction_id' => 'GD00017', 'transaction_date' => null, 'type' => 'Thương gia', 'quantity' => 1, 'total_amount' => 1000, 'points_earned' => 100, 'points_used' => 10, 'customer_id' => 17],
            ['transaction_id' => 'GD00018', 'transaction_date' => null, 'type' => 'Thương gia', 'quantity' => 1, 'total_amount' => 1000, 'points_earned' => 100, 'points_used' => 10, 'customer_id' => 18],
        ];
        

        foreach ($transactions as $transaction) {
            DB::table('transactions')->insert([
                'transaction_id' => $transaction['transaction_id'],
                'transaction_date' => $transaction['transaction_date'] ? Carbon::createFromFormat('Y-m-d', $transaction['transaction_date']) : null,
                'type' => $transaction['type'],
                'quantity' => $transaction['quantity'],
                'total_amount' => $transaction['total_amount'],
                'points_earned' => $transaction['points_earned'],
                'points_used' => $transaction['points_used'],
                'customer_id' => $transaction['customer_id']
            ]);
        }
    }
}
