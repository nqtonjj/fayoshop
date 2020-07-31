<?php

namespace App;

use App\Model\Products;
use Illuminate\Database\Eloquent\Model;

class ProductVersion extends Model
{
    //
    protected $table = "product_versions";

   public function products()
    {
        return $this->belongTo(Products::class);
    }
}
