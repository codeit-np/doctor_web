<?php

namespace App\Models;

use App\Http\Controllers\HospitalController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HospitalImage extends Model
{
    use HasFactory;
    public function hospitalImage()
    {
        return $this->belongsTo(HospitalController::class);
    }
}
