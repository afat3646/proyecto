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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('invoice_number');
            $table->string('details_order');
            $table->string('customer_number');
            $table->foreign('customer_number')->references('customer_number')->on('customers')->onDelete('cascade');
            $table->string('fiscal_data');
            $table->string('delivery_address');
            $table->string('status');
            $table->string('extra_info');           
            $table->string('photo_Loaded')->nullable();;
            $table->string('photo_Delivered_Order')->nullable();
            $table->foreignId('assinged_name')->nullable()->constrained('warehouses');
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
