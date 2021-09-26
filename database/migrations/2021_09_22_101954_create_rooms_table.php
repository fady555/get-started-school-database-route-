<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->string('name');

            $table->unsignedBigInteger('classroom_id');
            $table->foreign('classroom_id')->references('id')->on('classrooms');

            $table->unsignedBigInteger('school_id');
            $table->foreign('school_id')->references('id')->on('schools');

            $table->timestamps();
        });

        DB::table('rooms')->insert([
            ['name'=>'1a','classroom_id'=>'1','school_id'=>'1'],
            ['name'=>'2b','classroom_id'=>'2','school_id'=>'1'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rooms');
    }
}
