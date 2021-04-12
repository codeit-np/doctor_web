<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Config;

class Hospitalresource extends JsonResource
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
       // return parent::toArray($request);
       return [
        'id'=> $this->id,
        'name'=> $this->name,
        'telephone'=>$this->telephone,
        'city'=> $this->city,
        'country'=> $this->country,
        'zone'=> $this->zone,
        'district'=> $this->district,
        'province'=>$this->province,
        'ward'=>$this->ward,


        'description'=> $this->description,
        'image'=> $this->image,

     ];
    }
}
