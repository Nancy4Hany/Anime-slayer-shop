<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'User_id');
    }
    public function orderHistory()
    {
        return $this->hasOne('App\Models\orderHistory');
    }
}
