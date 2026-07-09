<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    protected $fillable = [
        'order_number',
        'status',
        'customer_name',
        'email',
        'phone',
        'country',
        'region',
        'city',
        'postal_code',
        'address',
        'notes',
        'ship_to_different',
        'shipping_name',
        'shipping_country',
        'shipping_region',
        'shipping_city',
        'shipping_postal_code',
        'shipping_address',
        'subtotal',
        'total',
        'locale',
    ];

    protected $casts = [
        'ship_to_different' => 'boolean',
        'subtotal' => 'decimal:2',
        'total' => 'decimal:2',
    ];

    public function items(): HasMany
    {
        return $this->hasMany(OrderItem::class);
    }
}
