<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateTypeSchoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('type_schools', function (Blueprint $table) {
            $table->id();
            $table->string('type_en');
            $table->string('type_ar');
            $table->timestamps();
        });

        DB::table('type_schools')->insert([
            ['type_en'=>'boys','type_ar'=>'بنين'],
            ['type_en'=>'girls','type_ar'=>'بنات'],
            ['type_en'=>'combined','type_ar'=>'مشترك'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('type_schools');
    }
}
