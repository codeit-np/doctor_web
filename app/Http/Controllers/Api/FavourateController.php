<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\FavourateResource;
use App\Models\Favourate;
use Illuminate\Http\Request;

use function PHPUnit\Framework\isEmpty;

class FavourateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $favourates = Favourate::all();
        return FavourateResource::collection($favourates);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $result = Favourate::where('user_id',$request->user()->id)->where('doctor_id',$request->doctor_id)->count();
        // return $result;

        if(empty($result)){
            $favourates = new Favourate();
            $favourates->user_id = $request->user()->id;
            $favourates->doctor_id = $request->doctor_id;
            $favourates->save();
            return response()->json(['message' => 'success']);
           
        }else{
            $favourates = Favourate::where('user_id',$request->user()->id)->where('doctor_id',$request->doctor_id);
            $favourates->delete();
           return response()->json(['message' => 'deleted']);
          

        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }
}
