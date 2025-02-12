<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('transaction_id'); // ID Giao Dịch
            $table->date('transaction_date'); // Ngày Giao Dịch
            $table->string('type'); // Loại Vé
            $table->integer('quantity'); // Số Lượng Vé
            $table->decimal('total_amount', 10, 2); // Tổng Giá Tiền
            $table->integer('points_earned'); // Điểm Tích Lũy từ Giao Dịch
            $table->integer('points_used'); // Điểm từ Giới Thiệu
            $table->foreignId('customer_id')->constrained('customers'); // ID KH lien ket voi ban KH
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
