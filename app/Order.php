<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillabe = ['name', 'address', 'items_ordered', 'item_total_price', 'tax_amount', 'ship_amount', 'stats', 'ship_date'];
}
