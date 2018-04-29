<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Console extends Model
{
    protected $fillabe = ['name', 'description', 'price', 'console_for', 'condition'];
}
