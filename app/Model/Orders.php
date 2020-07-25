<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    //
    protected $fillable = [
        'is_order', 'is_guest', 'amount', 'total'
    ];

    public function product_orders()
    {
        return $this->hasMany(Product_orders::class);
    }
}
