<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Custom_attributes extends Model
{
    protected $fillable = [
        'products_id', 'label', 'value', 'price'
    ];

    public function product()
    {
        return $this->belongsTo(Products::class, 'products_id');
    }
}
