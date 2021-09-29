<?php


namespace App\Http\Controllers\ControllerApi;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class AdminControllerUser extends Controller
{
    public function users(){
        return User::get();
    }

    public function editUser(Request $request,$lang,$id){
        app('translator')->setLocale($lang);

        $customAttChang = [];

        if ($lang == 'ar'): $customAttChang = [
            'permission'=>'حقل الصلاحيات',
            'jop_description'=>'حقل الوصف الوظيفى'
        ]; endif;

        $result = validator($request->all(),[
            'name'=>['required','string'],
            'username'=>['required','string'],
            'jop_description'=>['required','string'],
            'email'=>['required','email','unique:users,email'],
            'password'=>['required','string'],
            /*'permission'=>['nullable','array'],
            'permission.*'=>['numeric','exist:'],*/
        ],[],$customAttChang);


        if($result->fails()):

            $content = array(
                'success' => false,
                'data' => $result->messages(),
                'message' => trans('app.password or username faild'),
            );
            return response($content)->setStatusCode(400);

        endif;




        //User::find($id)->update($results);

    }

    public function addUser(){

    }
}
