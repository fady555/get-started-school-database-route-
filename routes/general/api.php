<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerApi\StudentController;


$middleware = [
    'auth:api',
    /*'permission:1',*/
];

$group = [
    'prefix'=>env('Api_password').'/{lang?}/',
    'middleware' => $middleware,
];


Route::group($group,function(){

    Route::get('/show-students',[StudentController::class,'index']);
    Route::get('/show-student/{id?}',[StudentController::class,'show']);
    Route::post('/add-student',[StudentController::class,'store']);
    Route::post('/edit-student/{id?}',[StudentController::class,'update']);

});
