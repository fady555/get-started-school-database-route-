<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateExamTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exam_types', function (Blueprint $table) {
            $table->id();
            $table->string('type_en');
            $table->string('type_ar');
            $table->timestamps();
        });


        DB::table('exam_types')->insert([
            ['type_en'=>'oral','type_ar'=>'شفوى'],
            ['type_en'=>'editorial','type_ar'=>'تحريرى'],
            ['type_en'=>'practical','type_ar'=>'عملى'],
            ['type_en'=>'open Book','type_ar'=>'من الكتاب'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exam_types');
    }
}
