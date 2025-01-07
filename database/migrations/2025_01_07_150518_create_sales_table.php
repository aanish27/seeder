<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('invoice_number');
            $table->foreignId('customer_id');
            $table->date('sales_date');
            $table->integer('total_amount');
            $table->string('payment_status');
            $table->string('payment_method');
            $table->string('shipping_address');
            $table->string('shipping_status');
            $table->integer('tax_amount');
            $table->string('discount_amount');
            $table->string('status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales');
    }
};
