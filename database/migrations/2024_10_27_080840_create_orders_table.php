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
            $table->string('delivery_address'); 
            $table->text('extra_info')->nullable(); 
            $table->string('photo_Loaded')->nullable(); 
            $table->string('photo_Delivered_Order')->nullable(); 
            $table->string('fiscal_data')->nullable(); 
            $table->string('order_status');
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
