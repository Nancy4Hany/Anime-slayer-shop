<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orderHistory extends Model
{
    use HasFactory;
    public function order()
    {
        return $this->belongsTo('App\Models\Order', 'order_id');
    }
}

// user user has many orders
// order 1 order 1 order history
// order has 1 user
