<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Carts extends Model
{
    //
    protected $fillable = [
        'user_id', 'orders_id', 'status_transport', 'status_pay', 'total', 'is_address', 'is_numberphone'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function orders()
    {
        return $this->belongsTo(Orders::class, 'orders_id');
    }

    public function product_oder()
    {
        return $this->belongsTo(Product_orders::class);
    }

    public function product()
    {
        return $this->belongsTo(Products::class);
    }


}
