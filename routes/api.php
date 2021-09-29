<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthApiController;


/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/




Route::post(env('Api_password').'/{lang?}/login',[AuthApiController::class,'login'])->name('api_login');
Route::post(env('Api_password').'/{lang?}/logout',[AuthApiController::class,'logout'])->middleware(['auth:api']);
Route::post(env('Api_password').'/{lang?}/refresh',[AuthApiController::class,'refresh'])->middleware(['auth:api']);
Route::get(env('Api_password').'/{lang?}/user',function (Request $request){
    return $request->user();
})->middleware(['auth:api']);
Route::get(env('Api_password').'/{lang?}/user/api',function (Request $request){
    return $request->user()->api_token;
})->middleware(['auth:api']);

