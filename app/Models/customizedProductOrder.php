<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customizedProductOrder extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'User_id');
    }
    public function CustomizedProductOrderHistory()
    {
        return $this->hasOne('App\Models\CustomizedProductOrderHistory');
    }
}
