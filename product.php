<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'category_id', 'price', 'expiry_date', 'stock_quantity', 'perishable'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
