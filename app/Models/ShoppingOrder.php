<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShoppingOrder extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'date_order',
        'total_price',
        'status_order',
        'address_shipping',
        'user_id',
        'payment_method_id',
        'status_payment',
    ];

    public function paymentMethod()
    {
        return $this->belongsTo(PaymentMethod::class, 'payment_method_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
