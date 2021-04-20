<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\SearchResource;
use App\Http\Resources\Specialistresource;
use App\Models\Doctor;
use App\Models\specialist;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {   

        $doctors = specialist::where('name','like','%'.$request->specialist.'%')->get();
        return SearchResource::collection($doctors);
    }
}
