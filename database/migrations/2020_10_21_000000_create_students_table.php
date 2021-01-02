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
            $table->foreignId('user_id');
            $table->string('picture');
            $table->string('mobile')->nullable();
            $table->string('github')->nullable();
            $table->string('LinkedIn')->nullable();
            $table->string('portfolio')->nullable();
            $table->foreignId('category_id');
            $table->string('biography', 500)->nullable();
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
