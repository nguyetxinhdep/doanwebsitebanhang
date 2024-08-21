<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    use HasFactory;

    protected $table = 'product_categorys';

    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'name',
    ];

    public function product()
    {
        return $this->hasMany(Product::class, 'id');
    }
}
