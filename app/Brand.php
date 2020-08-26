<?php

namespace App;

use App\Model\Products;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    //
    protected $table = 'brands';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'priority', 'parent_id',
    ];
    public function products()
    {
        return $this->hasMany(Products::class);
    }
}
