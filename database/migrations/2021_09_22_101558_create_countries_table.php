<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
class CreateCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->string('sortname');
            $table->string('name');
            $table->string('phonecode');
            $table->timestamps();
        });

        DB::table('countries')->insert([
            ['id'=>1,'sortname'=>'eg','name'=>'Egypt','phonecode'=>'+20'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('countries');
    }
}
