<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    //
    protected $fillable = [
        'order_number',
        'shop',
        'customer_name',
        'customer_email',
        'total_amount',
        'creation_date',
        'currency',
        'fake',
        'items',
        'items_total',
        'payment_method',
        'payment_type',
        'status',
        'notes',
        'updatedAt',
    ];

    protected $casts = [
        'items' => 'array', // если храните товары в JSON
    ];

    // Дополнительные методы модели, если необходимо
}
