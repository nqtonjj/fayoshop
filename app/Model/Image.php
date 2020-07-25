<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    //
    protected $fillable = [
        'name', 'url'
    ];
    public function products()
    {
        return $this->hasMany(Products::class);
    }
}
