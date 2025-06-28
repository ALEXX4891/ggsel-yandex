<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class YandexOrder extends Model
{
    use HasFactory; // Используем трейт HasFactory для генерации фабрики моделей

    protected $table = 'yandex_orders'; // Указываем имя таблицы в базе данных

    protected $fillable = [ // Определяем поля, которые можно заполнять массивом
        'order_id',
        'status',
        'substatus',
        'creation_date',
        'updated_at',
        'currency',
        'items_total',
        'delivery_total',
        'buyer_items_total',
        'buyer_total',
        'buyer_items_total_before_discount',
        'buyer_total_before_discount',
        'payment_type',
        'payment_method',
        'fake',
        'items',
        'subsidies',
        'delivery',
        'buyer',
        'notes',
        'tax_system',
        'cancel_requested',
        'expiry_date',
    ];

    protected $casts = [ // Определяем преобразования для полей
        'creation_date' => 'datetime',
        'updated_at' => 'datetime',
        'items_total' => 'decimal:2',
        'delivery_total' => 'decimal:2',
        'buyer_items_total' => 'decimal:2',
        'buyer_total' => 'decimal:2',
        'buyer_items_total_before_discount' => 'decimal:2',
        'buyer_total_before_discount' => 'decimal:2',
        'fake' => 'boolean',
        'items' => 'json',
        'subsidies' => 'json',
        'delivery' => 'json',
        'buyer' => 'json',
        'cancel_requested' => 'boolean',
        'expiry_date' => 'datetime',
    ];
}
