<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\patient;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class PatientController extends Controller
{
    public function login(Request $request){

    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    $patient = Patient::where('email', $request->email)->first();

    if (!$patient || !Hash::check($request->password, $patient->password)) {
        throw ValidationException::withMessages([
            'email' => ['The provided credentials are incorrect.'],
        ]);
    }

    return response()->json([
        'patient' => $patient,
        'token' => $patient->createToken('mobile', ['role:patient'])->plainTextToken
    ]);
}
}
