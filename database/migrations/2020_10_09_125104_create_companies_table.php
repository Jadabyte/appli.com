<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');
            //$table->integer('user_id')->unsigned()->nullable();
            $table->string('name');
            $table->string('street');
            $table->integer('house_number');
            $table->integer('postal_code');
            $table->string('city');
            $table->integer('category');
            $table->string('mail');
            $table->string('phone');
            $table->string('logo');
            $table->text('description');
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
        Schema::dropIfExists('companies');
    }
}
