<?php

namespace App\Http\Controllers\ControllerApi;

use App\Http\Controllers\Controller;
use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{

    public function index($lang)
    {
        app('translator')->setLocale($lang);

        $students = Student::with(['address.city','parent'])->get();

        $content = array(
            'success' => true,
            'data' =>$students ,
            'message' =>'show data',
        );
        return response($content)->setStatusCode(200);

    }

    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($lang,$id)
    {

        if(!Student::find($id)):
            $content = array(
                'success' => true,
                'data' =>[] ,
                'message' =>trans('validation.exists'),
            );
            return response($content)->setStatusCode(400);
        endif;

        $student = Student::find($id)->with([
            'address.city',
            'parent',
            'room.classroom',
            'room.school',

        ])->get();

        $content = array(
            'success' => true,
            'data' =>$student ,
            'message' =>'show data',
        );
        return response($content)->setStatusCode(200);


    }


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
