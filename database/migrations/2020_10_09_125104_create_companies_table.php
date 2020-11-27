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
            $table->foreignId('user_id');
            $table->string('name');
            $table->string('logo');
            $table->foreignId('category_id');
            $table->string('street')->default('');
            $table->string('houseNumber')->default('');
            $table->string('pobox')->default('');
            $table->string('postalCode')->default('');
            $table->string('city')->default('');
            $table->string('mail')->default('');
            $table->string('telephone')->nullable();
            $table->text('description', 300)->nullable();
            $table->string('LinkedIn')->nullable();
            $table->string('website')->nullable();
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
