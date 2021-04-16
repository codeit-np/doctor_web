<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Favouriteresource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
        return [
            'id' => $this->id,
            'name' => $this->doctors->name,
            //'price' => $this->doctors->price,
            //'color' => $this->doctors->color,
            'image' => $this->doctors->image,
           
            // 'price' => $this->price,
            // 'color' => $this->color,

        ];

    }
}
