<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Accessory extends Model
{
    protected $fillable = ['name', 'description', 'price', 'console_for', 'condition'];
}
