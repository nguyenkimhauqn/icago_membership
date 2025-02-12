<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->insert([
            ['customer_code' => 'KH2022-010', 'phone' => '(314) 397-6514', 'name' => 'GO Chị Loan - STL SGN', 'points' => 1000, 'rank' => 'KIM CƯƠNG', 'referrer_count' => 100],
            ['customer_code' => 'KH2022-011', 'phone' => '9126660014', 'name' => 'FBG Ivy Nguyen- Chị Dương - SGN TPA', 'points' => 1000, 'rank' => 'KIM CƯƠNG', 'referrer_count' => 100],
            ['customer_code' => 'KH2022-012', 'phone' => '9126660015', 'name' => 'FBG Mi Chell', 'points' => 500, 'rank' => 'BẠCH KIM', 'referrer_count' => 50],
            ['customer_code' => 'KH2022-013', 'phone' => '9126660016', 'name' => 'Kim Koo', 'points' => 500, 'rank' => 'BẠCH KIM', 'referrer_count' => 50],
            ['customer_code' => 'KH2022-014', 'phone' => '(985) 212-5307', 'name' => 'Mrs Thủy JAN-HAN', 'points' => 500, 'rank' => 'BẠCH KIM', 'referrer_count' => 50],
            ['customer_code' => 'KH2022-015', 'phone' => '(909) 737-8164', 'name' => 'FBG Hong Chau Le - Chị Châu - LAX SGN', 'points' => 500, 'rank' => 'BẠCH KIM', 'referrer_count' => 50],
            ['customer_code' => 'KH2022-016', 'phone' => '9126660017', 'name' => 'FBG My-chau Tran', 'points' => 50, 'rank' => 'VÀNG', 'referrer_count' => 5],
            ['customer_code' => 'KH2022-017', 'phone' => '(940) 882-1506', 'name' => 'FBG Van Nguyen- Chi Hai - DFW SGN', 'points' => 50, 'rank' => 'VÀNG', 'referrer_count' => 5],
            ['customer_code' => 'KH2022-018', 'phone' => '9126660018', 'name' => 'FBG Thy Nguyen', 'points' => 50, 'rank' => 'VÀNG', 'referrer_count' => 5]
        ]);
    }
}
