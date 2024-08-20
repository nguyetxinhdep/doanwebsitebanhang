<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'name',
        'price',
        'description',
        'image',
        'quantity_stock',
        'product_category_id',
    ];

    public function shoppingCart()
    {
        return $this->hasMany(ShoppingCart::class, 'id');
    }

    public function productCategory()
    {
        return $this->belongsTo(ProductCategory::class, 'product_category_id');
    }
}
