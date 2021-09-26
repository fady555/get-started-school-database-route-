<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateClassroomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classrooms', function (Blueprint $table) {
            $table->id();
            $table->string('name_en');
            $table->string('name_ar');
            $table->timestamps();
        });

        DB::table('classrooms')->insert([
            ['name_en'=>'First grade','name_ar'=>'الصف الاول الابتدائى'],
            ['name_en'=>'Second grade','name_ar'=>'الصف الثانى الابتدائى'],
            ['name_en'=>'Third grade','name_ar'=>'الصف الثالث الابتدائى'],
        ]);


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('classrooms');
    }
}
