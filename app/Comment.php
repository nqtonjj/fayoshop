<?php

namespace App;

use App\Model\Products;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $fillable = [
        'cmt_content', 'product_id', 'user_id',
    ];

    public function products(){
        return $this->belongsTo(Products::class);
    }
}
