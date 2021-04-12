<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    use HasFactory;

     public function doctors()
     {
     return $this->belongsTo(Doctor::class);
    }
    public function images()
   {
   return $this->hasMany(HospitalImage::class);
  }
}