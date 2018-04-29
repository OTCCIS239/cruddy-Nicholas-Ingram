<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $fillabe = ['name', 'description', 'price', 'console_for', 'condition'];
}
