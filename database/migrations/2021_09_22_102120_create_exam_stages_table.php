<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateExamStagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exam_stages', function (Blueprint $table) {
            $table->id();
            $table->string('title_stage_en');
            $table->string('title_stage_ar');
            $table->string('description');

            $table->unsignedBigInteger('school_year_id');
            $table->foreign('school_year_id')->references('id')->on('school_years')->onUpdate('cascade')->onDelete('cascade');

            $table->timestamps();
        });

        DB::table('exam_stages')->insert([
            ['title_stage_en'=>'exam of month 3 ','title_stage_ar'=>'اختارات شهر 3 ','description'=>'يمتحن هذا الاختبارت من الصف الاول الابتداءى حتصى الصف السادس الابتدايى','school_year_id'=>'1'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exam_stages');
    }
}
