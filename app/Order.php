<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'name',
        'address',
        'items_ordered',
        'items_ordered_prices',
        'tax_amount',
        'ship_amount',
        'status',
        'ship_date'
    ];
}
