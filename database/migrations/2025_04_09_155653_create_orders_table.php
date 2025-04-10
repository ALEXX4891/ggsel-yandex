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
            $table->json('shop');
            $table->string('buyer');
            $table->decimal('buyerItemsTotalBeforeDiscount', total: 10, places: 2);
            $table->string('creationDate');
            $table->json('currency');
            $table->json('delivery');
            $table->decimal('deliveryTotal', total: 10, places: 2);
            $table->boolean('fake');
            $table->integer('ordersId');
            $table->json('items');
            $table->decimal('itemsTotal', total: 10, places: 2);
            $table->json('paymentMethod');
            $table->json('paymentType');
            $table->json('status');
            $table->json('substatus');
            $table->json('taxSystem');
            $table->boolean('cancelRequested');
            $table->string('expiryDate');
            $table->string('notes');
            $table->json('subsidies');
            $table->string('updatedAt');
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
