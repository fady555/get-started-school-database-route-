<?php

use App\Http\Controllers\AuthApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerApi\AdminControllerUser;





$middleware = [
    'auth:api',
    /*'permission:1',*/
];

$group = [
    'prefix'=>env('Api_password').'/{lang?}/',
    'middleware' => $middleware,
];


Route::group($group,function(){

    Route::get('/show-users',[AdminControllerUser::class,'users']);
    Route::post('/edit-user/{id?}',[AdminControllerUser::class,'editUser']);
    Route::post('/add-user',[AdminControllerUser::class,'addUser']);
});


