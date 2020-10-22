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
            $table->integer('user_id')->unsigned()->nullable();
            $table->string('name');
            $table->string('logo')->nullable('');
            $table->string('category')->default('');
            $table->string('street_and_number')->default('');
            $table->string('pobox')->default('');
            $table->string('postal_code')->default('');
            $table->string('city')->default('');
            $table->string('mail')->default('');
            $table->string('telephone')->nullable();
            $table->text('description', 300)->nullable();
            $table->timestamp('mail_verified_at')->nullable();
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
