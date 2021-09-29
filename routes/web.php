<?php

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/redirect-permission/{api_or_web?}', function ($api_or_web) {

    $type_request =  json_decode($api_or_web);
    if(in_array('api',$type_request)):
        $content = array(
            'success' => false,
            'data' => [],
            'message' => 'Not Permissions For Access That Url',
        );
            return response($content)->setStatusCode(403);

        else:

            return  redirect()->route('login');

        endif;



})->name('redirect_permission_api_or_web');

Route::get('/login', function () {
    return "login";
})->name('login');



Route::get('/xx', function () {
    //return \App\TypeSchool::with(['school'])->get();
    //return \App\Country::with(['state'])->get();
    //return \App\State::with(['cities.trans'])->get();
    //return \App\City_translation::with(['city'])->get();
  // return     \App\City::with(['state'])->get();

    //return \App\Address::with('city.trans')->with('city.state')->get();

    //return \App\School::with(['address','type'])->get();


    //return \App\Student::with(['parent'])->get();
    //return \App\ParentData::with(['students'])->get();
    //return \App\Teacher::with(['address'])->get();
    /* \App\Exam::with(['student'])->get(['student']);*/

    /*return \App\Exam::query()->with(array('student' => function($query) {$query->select(['id','name_en']);}))->get();
    return \App\Exam::with('student:id,name_en,name_ar')->get();
    public function user()
    {
        return $this->belongsTo('User')->select(['id', 'username']);
    }
*/
});

/*
Post::with(['user' => function ($query) {
    $query->select('id', 'username');
}])
    ->select('title', 'content', 'user_id')
    ->get();
*/

Route::get('/99',function (){
    return \App\Exam::with(['typeExam'])->get();
});
