<?php

namespace App\Model;

use App\Brand;
use App\Comment;
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
        'image_id', 'category_id', 'size', 'description', 'content', 'brand_id'
    ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function image()
    {
        return $this->belongsTo(Image::class);
    }

    public function brand()
{
  return $this->belongsTo(Brand::class);
}

    public function attributes()
    {
        return $this->hasMany(Custom_attributes::class);
    }

    public function comments() {

        return $this->hasMany(Comment::class);

    }
}
