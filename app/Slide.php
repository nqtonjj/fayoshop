<?php

namespace App;

use App\Model\Image;
use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    //
    protected  $primaryKey = 'id';

    protected $fillable = [
        'title', 'content', 'slider_id', 'image_id'
    ];

    public function slider()
    {
        return $this->belongsTo(slider::class, 'slider_id');
    }

    public function image()
    {
        return $this->belongsTo(Image::class);
    }
}
