<?php

use App\Http\Controllers\Api\DoctorController;
use App\Http\Controllers\Api\FavourateController;
use App\Http\Controllers\Api\SpecialistController;
use App\Http\Controllers\Api\HospitalController;
use App\Http\Controllers\Api\SearchController;
use App\Http\Controllers\Api\TokenController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::post('user', [ProfileController::class, 'update']);
Route::post('register',[TokenController::class,'register']);
Route::post('login',[TokenController::class,'login']);




Route::group(['middleware'=>['auth:sanctum']],function(){
    Route::resource('hospitals', HospitalController::class);
    Route::resource('doctors', DoctorController::class);
Route::resource('specialists', SpecialistController::class);
Route::get('searchHospital', [HospitalController::class, 'search']);
Route::post('logout', [TokenController::class, 'logout']);
Route::post('update', [TokenController::class, 'update']);
Route::post('changepassword', [TokenController::class, 'changepassword']);

Route::post('search',[SearchController::class,'search']);

Route::resource('favourates',FavourateController::class);
Route::get('nearest/{id}',[HospitalController::class,'nearest']);
});


