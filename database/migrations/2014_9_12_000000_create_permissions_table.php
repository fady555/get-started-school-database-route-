<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
class CreatePermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permissions', function (Blueprint $table) {
            $table->id();
            $table->string('name_en');
            $table->string('name_ar');
        });

        DB::table('permissions')->insert([

            #user permissions
            ['name_en'=>'Add User','name_ar'=>'اضافه يوزر'],#1
            ['name_en'=>'Edit User','name_ar'=>'تعديل يوزر'],#2
            ['name_en'=>'Show User','name_ar'=>'اظهار يوزر'],#3
            ['name_en'=>'Delete User','name_ar'=>'حذف يوزر'],#4
            # type School permissions
            ['name_en'=>'Add Type school','name_ar'=>'اضافه نوع مدرسه'],#5
            ['name_en'=>'Edit Type school','name_ar'=>'تعديل  نوع مدرسه'],#6
            ['name_en'=>'Show Type school','name_ar'=>'اظهار  نوع مدرسه'],#7
            ['name_en'=>'Delete Type school','name_ar'=>'حذف  نوع مدرسه'],#8
            # school permissions
            ['name_en'=>'Add  school','name_ar'=>'اضافه مدرسه'],#9
            ['name_en'=>'Edit  school','name_ar'=>'تعديل مدرسه'],#10
            ['name_en'=>'Show  school','name_ar'=>'اظهار مدرسه'],#11
            ['name_en'=>'Delete  school','name_ar'=>'حذف مدرسه'],#12
            # address permissions
            ['name_en'=>'Add  address','name_ar'=>'اضافه عنوان'],#13
            ['name_en'=>'Edit  address','name_ar'=>'تعديل عنوان'],#14
            ['name_en'=>'Show  address','name_ar'=>'اظهار عنوان'],#15
            ['name_en'=>'Delete  address','name_ar'=>'حذف عنوان'],#16
            # classroom permissions
            ['name_en'=>'Add  classroom','name_ar'=>'اضافه مرحله دراسيه'],#17
            ['name_en'=>'Edit  classroom','name_ar'=>'تعديل مرحله دراسيه'],#18
            ['name_en'=>'Show  classroom','name_ar'=>'اظهار مرحله دراسيه'],#19
            ['name_en'=>'Delete  classroom','name_ar'=>'حذف مرحله دراسيه'],#20
            # room permissions
            ['name_en'=>'Add  room','name_ar'=>'اضافه فصل '],#21
            ['name_en'=>'Edit  room','name_ar'=>'تعديل فصل'],#22
            ['name_en'=>'Show  room','name_ar'=>'اظهار فصل'],#23
            ['name_en'=>'Delete  room','name_ar'=>'حذف فصل'],#24
            # parent permissions
            ['name_en'=>'Add  parent','name_ar'=>'اضافه ولى امر '],#25
            ['name_en'=>'Edit  parent','name_ar'=>'تعديل ولى امر'],#26
            ['name_en'=>'Show  parent','name_ar'=>'اظهار ولى امر'],#27
            ['name_en'=>'Delete  parent','name_ar'=>'حذف ولى امر'],#28
            # student permissions
            ['name_en'=>'Add  student','name_ar'=>'اضافه طالب '],#29
            ['name_en'=>'Edit  student','name_ar'=>'تعديل طالب'],#30
            ['name_en'=>'Show  student','name_ar'=>'اظهار طالب'],#31
            ['name_en'=>'Delete  student','name_ar'=>'حذف طالب'],#32
            # school year permissions
            ['name_en'=>'Add  school year','name_ar'=>'اضافه عام دراسى '],#33
            ['name_en'=>'Edit  school year','name_ar'=>'تعديل عام دراسى'],#34
            ['name_en'=>'Show  school year','name_ar'=>'اظهار عام دراسى'],#35
            ['name_en'=>'Delete  school year','name_ar'=>'حذف عام دراسى'],#36
            # subject permissions
            ['name_en'=>'Add  subject','name_ar'=>'اضافه ماده دراسيه '],#37
            ['name_en'=>'Edit  subject','name_ar'=>'تعديل ماده دراسيه'],#38
            ['name_en'=>'Show  subject','name_ar'=>'اظهار ماده دراسيه'],#39
            ['name_en'=>'Delete  subject','name_ar'=>'حذف ماده دراسيه'],#40



        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permissions');
    }

}
