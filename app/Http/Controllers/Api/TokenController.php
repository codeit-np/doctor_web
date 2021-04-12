<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class TokenController extends Controller
{
    //Register
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name'=> 'required',
            'email' =>'required|email',
            'password'=>'required'
        ]);

        if($validator->fails()){
            return response()->json([
                'message'=>'Bad Request',
                'code'=> 401
            ]);
        }

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        return response()->json([
            'message'=>'success',
            
        ],200);

    }

    //login
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
            //'onesignal' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Bad Request',
               
            ],401);
        }

        $credentials = request(['email', 'password']);

        

        //if clients come with email and password
        $user = User::where('email', $request->email)->first();
        // $onesignal = $user->createOneSignal('onesignal')->plainTextToken;

        //Generate Token
        $tokenResult = $user->createToken('authToken')->plainTextToken;
      //  $user->onesignal = $request->onesignal;
        $user->update();


        return response()->json([
            'message' => 'success',
            'token' => $tokenResult
        ],200);
    }


    //Logout
    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();

        return response()->json([
            'message'=>'Token Deleted',
           
        ],200);

    }
}
