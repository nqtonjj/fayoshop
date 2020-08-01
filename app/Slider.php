<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class slider extends Model
{
    //
    protected $table = 'sliders';
    protected  $primaryKey = 'id';

    protected $fillable = [
        'title', 'location', 'id'
    ];
    public function slides()
    {
        return $this->hasMany(Slide::class);
    }
}
