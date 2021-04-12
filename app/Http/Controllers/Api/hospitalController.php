<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Hospitalresource;
use App\Models\Hospital;
use Illuminate\Http\Request;

class hospitalController extends Controller
{
    public function index()
    {
        $hospitals = Hospital::all();
        return Hospitalresource::collection($hospitals);
    }




    public function search(Request $request)
    {
        $hospitalquery = Hospital::query();
        if ($request->name) {
            $hospitalquery->where('name', 'Like', '%' . $request->name . '%');
        }

        if ($request->city) {
            $hospitalquery->where('city', $request->city);
        }

        $hospitals = $hospitalquery->get();
        return response()->json($hospitals);
    }
}
