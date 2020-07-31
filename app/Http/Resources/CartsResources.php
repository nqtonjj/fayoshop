<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CartsResources extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'user' => $this->user,
            'orders' => $this->orders,
            'status_transport' => $this->status_transport,
            'status_pay' => $this->status_pay,
            'total' => $this->total,
        ];
    }
}
