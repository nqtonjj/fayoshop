<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product_orders extends Model
{
    //
    protected $fillable = [
        'product_id', 'custom_attr', 'amount', 'orders_id'
    ];
    public function product()
    {
        return $this->belongsTo(Products::class, 'product_id');
    }
}
