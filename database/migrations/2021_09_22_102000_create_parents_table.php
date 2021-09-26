<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateParentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parents', function (Blueprint $table) {
            $table->id();
            $table->string('full_name_en');
            $table->string('full_name_ar');
            $table->bigInteger('id_card');
            $table->string('img_card');
            $table->string('phone_number_1');
            $table->string('phone_number_2')->nullable();
            $table->string('jop');
            $table->timestamps();
        });

        DB::table('parents')->insert([
            ['full_name_en'=>'ali mohamed ali ','full_name_ar'=>'على محمد على','id_card'=>'12345696387896','img_card'=>'...','phone_number_1'=>'01289546965','phone_number_2'=>'0234582582','jop'=>'lowyer']
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parent');
    }
}
