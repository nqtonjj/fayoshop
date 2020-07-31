<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Carts extends Model
{
    //
    protected $fillable = [
        'user_id', 'orders_id', 'status_transport', 'status_pay', 'total'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function orders()
    {
        return $this->belongsTo(Orders::class, 'orders_id');
    }
}
