<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('jop_description');
            $table->string('email')->unique();
            //$table->timestamp('email_verified_at')->nullable();
            $table->string('password_resets')->nullable();
            $table->string('password');
            $table->string('api_token');
            $table->longText('premises');
            $table->rememberToken();
            $table->timestamps();
        });
        DB::table('users')->insert([
            ['name'=>'fady','jop_description'=>'dfdfsfsdf','email'=>'jhrt19@yahoo.com','password'=>'$2y$10$ruhyT3ICPdf29Llnp5XS7O62izQFrnB3BNM7t0LwTOD9KexOKZuvy','api_token'=>'080042cad6356ad5dc0a720c18b53b8e53d4c274','premises'=>'[]'],
            ['name'=>'fady2','jop_description'=>'dfdfsfsdf','email'=>'fadyfard141@gmail.com','password'=>'$2y$10$ruhyT3ICPdf29Llnp5XS7O62izQFrnB3BNM7t0LwTOD9KexOKZuvy','api_token'=>'080042cad6356ad5dc0a720c18b53b8e53d4c274','premises'=>'[]'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
