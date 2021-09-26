<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateStatesTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('states_translations', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->integer('state_id');
            $table->foreign('state_id')->references('id')->on('states');
            $table->string('name');
            $table->string('lang');
            $table->timestamps();
        });

        DB::table('states_translations')->insert([
            ['id'=>1, 'state_id'=>1,'name'=>'القاهرة', 'lang'=>'ar'],
            ['id'=>2, 'state_id'=>2,'name'=>'الإسكندرية', 'lang'=>'ar'],
            ['id'=>3, 'state_id'=>3,'name'=>'الإسماعيلية', 'lang'=>'ar'],
            ['id'=>4, 'state_id'=>4,'name'=>'أسوان', 'lang'=>'ar'],
            ['id'=>5, 'state_id'=>5,'name'=>'أسيوط', 'lang'=>'ar'],
            ['id'=>6, 'state_id'=>6,'name'=>'الأقصر', 'lang'=>'ar'],
            ['id'=>7, 'state_id'=>7,'name'=>'البحر الأحمر', 'lang'=>'ar'],
            ['id'=>8, 'state_id'=>8,'name'=>'البحيرة', 'lang'=>'ar'],
            ['id'=>9, 'state_id'=>9,'name'=>'بني سويف', 'lang'=>'ar'],
            ['id'=>10,'state_id'=> 10,'name'=> 'بورسعيد', 'lang'=>'ar'],
            ['id'=>11,'state_id'=> 11,'name'=> 'جنوب سيناء', 'lang'=>'ar'],
            ['id'=>12,'state_id'=> 12,'name'=> 'الجيزة', 'lang'=>'ar'],
            ['id'=>13,'state_id'=> 13,'name'=> 'الدقهلية', 'lang'=>'ar'],
            ['id'=>14,'state_id'=> 14,'name'=> 'دمياط', 'lang'=>'ar'],
            ['id'=>15,'state_id'=> 15,'name'=> 'سوهاج', 'lang'=>'ar'],
            ['id'=>16,'state_id'=> 16,'name'=> 'السويس', 'lang'=>'ar'],
            ['id'=>17,'state_id'=> 17,'name'=> 'الشرقية', 'lang'=>'ar'],
            ['id'=>18,'state_id'=> 18,'name'=> 'شمال سيناء', 'lang'=>'ar'],
            ['id'=>19,'state_id'=> 19,'name'=> 'الغربية', 'lang'=>'ar'],
            ['id'=>20,'state_id'=> 20,'name'=> 'الفيوم', 'lang'=>'ar'],
            ['id'=>21,'state_id'=> 21,'name'=> 'القليوبية', 'lang'=>'ar'],
            ['id'=>22,'state_id'=> 22,'name'=> 'قنا', 'lang'=>'ar'],
            ['id'=>23,'state_id'=> 23,'name'=> 'كفر الشيخ', 'lang'=>'ar'],
            ['id'=>24,'state_id'=> 24,'name'=> 'مطروح', 'lang'=>'ar'],
            ['id'=>25,'state_id'=> 25,'name'=> 'المنوفية', 'lang'=>'ar'],
            ['id'=>26,'state_id'=> 26,'name'=> 'المنيا', 'lang'=>'ar'],
            ['id'=>27,'state_id'=> 27,'name'=> 'الوادي الجديد', 'lang'=>'ar'],
            ['id'=>32,'state_id'=> 1, 'name'=>'Cairo', 'lang'=>'en'],
            ['id'=>33,'state_id'=> 2, 'name'=>'Alexandria', 'lang'=>'en'],
            ['id'=>34,'state_id'=> 3, 'name'=>'Ismailia', 'lang'=>'en'],
            ['id'=>35,'state_id'=> 4, 'name'=>'Aswan', 'lang'=>'en'],
            ['id'=>36,'state_id'=> 5, 'name'=>'Asyut', 'lang'=>'en'],
            ['id'=>37,'state_id'=> 6, 'name'=>'Luxor', 'lang'=>'en'],
            ['id'=>38,'state_id'=> 7, 'name'=>'Red Sea', 'lang'=>'en'],
            ['id'=>39,'state_id'=> 8, 'name'=>'Beheira', 'lang'=>'en'],
            ['id'=>40,'state_id'=> 9, 'name'=>'Beni Suef', 'lang'=>'en'],
            ['id'=>41,'state_id'=> 10,'name'=> 'Port Said', 'lang'=>'en'],
            ['id'=>42,'state_id'=> 11,'name'=> 'South Sinai', 'lang'=>'en'],
            ['id'=>43,'state_id'=> 12,'name'=> 'Giza', 'lang'=>'en'],
            ['id'=>44,'state_id'=> 13,'name'=> 'Dakahlia', 'lang'=>'en'],
            ['id'=>45,'state_id'=> 14,'name'=> 'Damietta', 'lang'=>'en'],
            ['id'=>46,'state_id'=> 15,'name'=> 'Sohag', 'lang'=>'en'],
            ['id'=>47,'state_id'=> 16,'name'=> 'Suez', 'lang'=>'en'],
            ['id'=>48,'state_id'=> 17,'name'=> 'Sharqia', 'lang'=>'en'],
            ['id'=>49,'state_id'=> 18,'name'=> 'North Sinai', 'lang'=>'en'],
            ['id'=>50,'state_id'=> 19,'name'=> 'Gharbia', 'lang'=>'en'],
            ['id'=>51,'state_id'=> 20,'name'=> 'Faiyum', 'lang'=>'en'],
            ['id'=>52,'state_id'=> 21,'name'=> 'Qalyubia', 'lang'=>'en'],
            ['id'=>53,'state_id'=> 22,'name'=> 'Qena', 'lang'=>'en'],
            ['id'=>54,'state_id'=> 23,'name'=> 'Kafr El Sheikh', 'lang'=>'en'],
            ['id'=>55,'state_id'=> 24,'name'=> 'Matruh', 'lang'=>'en'],
            ['id'=>56,'state_id'=> 25,'name'=> 'Monufia', 'lang'=>'en'],
            ['id'=>57,'state_id'=> 26,'name'=> 'Minya', 'lang'=>'en'],
            ['id'=>58,'state_id'=> 27,'name'=> 'New Valley', 'lang'=>'en'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('state_translations');
    }
}
