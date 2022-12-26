<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'category_id',
        'price',
        'discount_price',
    ];

    public function category()
    {
        return $this->belongsTo('App\Models\Category', 'category_id');
    }
    public function images()
    {
        return $this->hasMany('App\Models\ProductImage', 'product_id');
    }
    public function sizes()
    {
        return $this->belongsToMany('App\Models\ProductSize', 'product_id');
    }

}
