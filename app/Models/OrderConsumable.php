<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderConsumable extends Model
{
    use HasFactory;
    protected $table = 'order_consumables';
    protected $guarded = [];
}
