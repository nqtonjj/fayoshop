<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class slider extends Model
{
    //
    protected $table = 'sliders';

    protected $fillable = [
        'name', 'title', 'image', 'content', 'link'
    ];
}
