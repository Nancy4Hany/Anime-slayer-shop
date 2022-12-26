<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customizedProductImage extends Model
{
    use HasFactory;
    public function customized_product(){
        return $this->belongsTo('App\Models\customizedProduct');
    }
}
