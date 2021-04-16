<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class FavourateResource extends JsonResource
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
            "id" => $this->doctor->id,
             "name" => $this->doctor->name,
            "city" => $this->doctor->city,
            "mobile" => $this->doctor->mobile,
            "image" => $this->doctor->image,
        ];
    }
}
