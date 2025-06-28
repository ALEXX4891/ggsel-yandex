<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('yandex_orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('order_id')->unique();
            $table->string('status');
            $table->string('substatus')->nullable();
            $table->datetime('creation_date');
            // $table->datetime('updated_at');
            $table->string('currency', 3);
            $table->decimal('items_total', 12, 2);
            $table->decimal('delivery_total', 12, 2);
            $table->decimal('buyer_items_total', 12, 2);
            $table->decimal('buyer_total', 12, 2);
            $table->decimal('buyer_items_total_before_discount', 12, 2);
            $table->decimal('buyer_total_before_discount', 12, 2);
            $table->string('payment_type');
            $table->string('payment_method');
            $table->boolean('fake');
            $table->json('items')->nullable();
            $table->json('subsidies')->nullable();
            $table->json('delivery')->nullable();
            $table->json('buyer')->nullable();
            $table->text('notes')->nullable();
            $table->string('tax_system')->nullable();
            $table->boolean('cancel_requested')->default(false);
            $table->datetime('expiry_date')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('yandex_orders');
    }
};
