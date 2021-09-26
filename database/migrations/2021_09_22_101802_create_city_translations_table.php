<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateCityTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('city_translations', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->integer('city_id');
            $table->foreign('city_id')->references('id')->on('cities');
            $table->string('name');
            $table->string('lang');
            $table->timestamps();
        });

        $x = \Illuminate\Support\Facades\File::get(public_path('cities_translation.sql'));
        DB::unprepared($x);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('city_translations');
    }
}
