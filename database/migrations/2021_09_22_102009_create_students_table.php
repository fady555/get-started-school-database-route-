<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name_en');
            $table->string('name_ar');
            $table->bigInteger('number_id');
            $table->boolean('gender')->comment('0=> female 1=> mail');
            $table->date('data_of_birth');
            $table->string('avatar')->nullable();
            $table->unsignedBigInteger('parent_id');
            $table->foreign('parent_id')->references('id')->on('parents');
            $table->longText('file');
            $table->unsignedBigInteger('room_id');
            $table->foreign('room_id')->references('id')->on('rooms');
            $table->boolean('status')->default(0)->comment('0=>new in that year  /1=>old in that year back the school year  ');

            $table->timestamps();
        });

        DB::table('students')->insert([
            [
                'name_en'=>'فادى فريد',
                'name_ar'=>'fady fared',
                'number_id'=>'5894496321458791234',
                'gender'=>1,
                'data_of_birth'=>'2000-4-6',
                'avatar'=>'',
                'parent_id'=>1,
                'file'=>'',
                'room_id'=>'2',
                'status'=>0,
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
