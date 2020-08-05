<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductsResources extends JsonResource
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
            'id' => $this->id,
            'name' => $this->name,
            'sale_price' => $this->sale_price,
            'is_new' => $this->is_new,
            'is_hot' => $this->is_hot,
            'image' => $this->image,
            'category' => $this->category,
            'size' => $this->size,
            'description' => $this->description,
            'content' => $this->content,
        ];
    }
}
