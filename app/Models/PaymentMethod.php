<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{
    use HasFactory;

    protected $table = 'payment_methods';
    
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'name',
    ];

    public function shoppingOrder()
    {
        return $this->hasMany(ShoppingOrder::class, 'id');
    }
}
