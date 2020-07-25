<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Carts extends Model
{
    //
    protected $fillable = [
        'user_id', 'status_order', 'status_pay', 'amount', 'total'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function orders()
    {
        return $this->hasMany(Orders::class);
    }
}
