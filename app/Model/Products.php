<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{

    protected $table = "products";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'price', 'sale_price', 'is_new', 'is_hot', 'image_id', 'category_id', 'size',
    ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function image()
    {
        return $this->belongsTo(Image::class);
    }
}
