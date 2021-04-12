<?php

namespace App\Http\Controllers\Api;
use App\Http\Resources\Favouriteresource;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\favourite;

class favouriteController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fav = favourite::all();
        return Favouriteresource::collection($fav);
        //return response()->json($fav);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return $request->user()->id;
        $fav = new Favourite();
        $fav->product_id = $request->product_id;
        $fav->user_id = $request->user()->id;
        $fav->save();
        return response()->json(['message' => 'success'], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $userid =auth('sanctum')->user()->id;

        $favdoctor = Favourite::where('doctor_id', $id)->where('user_id', $userid)->get();
        return Favouriteresource::collection($favdoctor);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $favdoctor = Favourite::find($id);
        $favdoctor->delete();
        return response()->json(['message' => 'deleted'], 200);
    }
}

