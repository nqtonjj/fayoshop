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
        'name', 'price', 'sale_price', 'is_new', 'is_hot',
        'image_id', 'category_id', 'size', 'description', 'content'
    ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function image()
    {
        return $this->belongsTo(Image::class);
    }

    public function brands()
    {
        return $this->belongTo(Brand::class);
    }

    public function attributes()
    {
        return $this->hasMany(Custom_attributes::class);
    }
}
