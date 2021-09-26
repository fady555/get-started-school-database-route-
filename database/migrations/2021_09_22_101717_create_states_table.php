<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
class CreateStatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('states', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->integer('country_id');
            $table->foreign('country_id')->references('id')->on('countries');
            $table->timestamps();
        });

        DB::table('states')->insert([
            ['id'=>1, 'country_id'=> 1],
            ['id'=>2, 'country_id'=> 1],
            ['id'=>3, 'country_id'=> 1],
            ['id'=>4, 'country_id'=> 1],
            ['id'=>5, 'country_id'=> 1],
            ['id'=>6, 'country_id'=> 1],
            ['id'=>7, 'country_id'=> 1],
            ['id'=>8, 'country_id'=> 1],
            ['id'=>9, 'country_id'=> 1],
            ['id'=>10,'country_id'=> 1],
            ['id'=>11,'country_id'=> 1],
            ['id'=>12,'country_id'=> 1],
            ['id'=>13,'country_id'=> 1],
            ['id'=>14,'country_id'=> 1],
            ['id'=>15,'country_id'=> 1],
            ['id'=>16,'country_id'=> 1],
            ['id'=>17,'country_id'=> 1],
            ['id'=>18,'country_id'=> 1],
            ['id'=>19,'country_id'=> 1],
            ['id'=>20,'country_id'=> 1],
            ['id'=>21,'country_id'=> 1],
            ['id'=>22,'country_id'=> 1],
            ['id'=>23,'country_id'=> 1],
            ['id'=>24,'country_id'=> 1],
            ['id'=>25,'country_id'=> 1],
            ['id'=>26,'country_id'=> 1],
            ['id'=>27,'country_id'=> 1],
        ]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('states');
    }
}
