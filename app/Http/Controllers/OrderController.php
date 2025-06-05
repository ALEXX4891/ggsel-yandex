<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        // Валидация входящих данных
        $validated = $request->validate([
            'order_number' => 'required|unique:orders',
            'shop' => 'required|string',
            'customer_name' => 'required|string',
            'customer_email' => 'required|email',
            'total_amount' => 'required|numeric',
            'creation_date' => 'required|date',
            'currency' => 'required|string',
            'fake' => 'required|boolean',
            'items' => 'nullable|array',
            'items_total' => 'required|numeric',
            'payment_method' => 'required|string',
            'payment_type' => 'required|string',
            'notes' => 'nullable|string',
            'updatedAt' => 'required|date',

            // 'total_amount' => 'required|numeric',
            // 'customer_name' => 'required|string',
            // 'customer_email' => 'required|email',
            'status' => 'nullable|string',
        ]);

        // Создание заказа
        $order = Order::create($validated);

        // Ответ с созданным заказом
        return response()->json([
            'message' => 'Order created successfully',
            'order' => $order
        ], 201);
    }
}

    // public function up(): void
    // {
    //     Schema::create(table: 'orders', callback: function (Blueprint $table): void {
    //         $table->id();
    //         $table->string(column: 'order_number')->unique();
    //         $table->string(column: 'shop');
    //         $table->string(column: 'customer_name');
    //         $table->string(column: 'customer_email');
    //         $table->decimal(column: 'total_amount', total: 10, places: 2);
    //         $table->string(column: 'creation_date');
    //         $table->string(column: 'currency');
    //         $table->boolean(column: 'fake')->default(value: false);
    //         $table->text(column: 'items')->nullable();
    //         $table->decimal(column: 'items_total', total: 10, places: 2);
    //         $table->string(column: 'payment_method');
    //         $table->string(column: 'payment_type');
    //         $table->string(column: 'status')->default(value: 'pending');
    //         $table->string(column: 'notes');
    //         $table->string(column: 'updatedAt');
    //         $table->timestamps();
    //     });
    // }
