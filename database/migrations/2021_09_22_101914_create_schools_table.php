<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateSchoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schools', function (Blueprint $table) {
            $table->id();
            $table->string('name_schools');
            //====================================
            $table->unsignedBigInteger('address_id');
            $table->foreign('address_id')->references('id')->on('addresses');
            //====================================
            $table->string('school_code');
            $table->string('school_slogon')->nullable();
            //========================================
            $table->unsignedBigInteger('type_school_id');
            $table->foreign('type_school_id')->references('id')->on('type_schools');
            //=========================================

            $table->timestamps();
        });

        DB::table('schools')->insert([
            ['name_schools'=>'alhya 2 ','address_id'=>1,'school_code'=>'#55@oo','type_school_id'=>'1']
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schools');
    }
}
