<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            //$table->integer('user_id')->unsigned()->nullable();
            $table->string('firstName')->default('');
            $table->string('lastName')->default('');
            $table->string('r_number', 8);
            $table->string('address')->nullable();
            $table->string('mobile')->nullable();
            $table->string('LinkedIn')->nullable();
            $table->string('portfolio')->nullable();
            $table->integer('category')->nullable();
            $table->string('biography', 500)->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
