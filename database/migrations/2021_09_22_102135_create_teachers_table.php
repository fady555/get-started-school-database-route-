<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('name_en');
            $table->string('name_ar');
            $table->bigInteger('id_personal_card');
            $table->boolean('gender')->comment('0=> female  1=>male ');
            $table->date('data_of_birth');
            $table->string('avatar')->nullable();
            $table->text('degree');

            $table->unsignedBigInteger('address_id');
            $table->foreign('address_id')->references('id')->on('addresses');

            $table->string('number')->nullable();
            $table->string('email')->unique();


            $table->timestamps();
        });

        DB::table('teachers')->insert([
            ['name_en'=>'omer','name_ar'=>'عمر','id_personal_card'=>'89654789532569','gender'=>1,'data_of_birth'=>'2000-6-9','degree'=>'faculty  of english education','address_id'=>1,'number'=>'0128792546899','email'=>'dd']
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teachers');
    }
}
