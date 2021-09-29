<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subjects', function (Blueprint $table) {
            $table->id();
            $table->string('name_en');
            $table->string('name_ar');
            $table->longText('file')->nullable();
            $table->double('max_result');
            $table->double('success_degree');

            $table->unsignedBigInteger('class_room_id');
            $table->foreign('class_room_id')->references('id')->on('subjects');

            $table->timestamps();
        });

        DB::table('subjects')->insert([
            ['name_en'=>'arabic','class_room_id'=>'1','name_ar'=>'لغه عربيه','max_result'=>'100','success_degree'=>'50'],
            ['name_en'=>'math','class_room_id'=>'1','name_ar'=>'رياضيات','max_result'=>'100','success_degree'=>'50'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subjects');
    }
}
