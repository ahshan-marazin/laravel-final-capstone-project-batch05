<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = [
        'sku',
        'name',
        'image',
        'cost_price',
        'selling_price',
        'brand_id',
        'category_id',
        'description',
    ];
}
