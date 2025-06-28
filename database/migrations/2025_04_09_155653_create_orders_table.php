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
        Schema::create(table: 'orders', callback: function (Blueprint $table): void {
            $table->id();
            $table->string(column: 'shop');
            $table->string(column: 'order_number')->unique();
            $table->string(column: 'buyer_id');
            $table->string(column: 'buyer_name'); // ФИО
            $table->decimal(column: 'buyer_total', total: 10, places: 2); //buyerTotal
            $table->decimal(column: 'buyer_items_total', total: 10, places: 2);
            $table->string(column: 'creation_date');
            $table->string(column: 'currency');
            $table->boolean(column: 'fake')->default(value: false);
            $table->text(column: 'items')->nullable();
            $table->string(column: 'payment_method');
            $table->string(column: 'payment_type');
            $table->string(column: 'status')->default(value: 'pending');
            $table->string(column: 'notes');
            $table->string(column: 'updatedAt');
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
