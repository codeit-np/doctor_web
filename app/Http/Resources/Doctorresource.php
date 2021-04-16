<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Config;

class Doctorresource extends JsonResource
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
            'id'=> $this->id,
            'name'=> $this->name,
            'image'=> $this->image,
            'telephone'=> $this->telephone,
            'country'=> $this->country,
            'zone'=> $this->zone,
            'district'=> $this->district,
            'city'=> $this->city,
            'ward'=> $this->ward,
            'province'=> $this->province,
            'specialist' => $this->specialist->name,
            'mobile'=> $this->mobile,
            'description'=> $this->description,

        ];
    }
}


