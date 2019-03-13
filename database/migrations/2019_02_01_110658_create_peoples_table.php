<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeoplesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peoples', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('photo')->nullable(); // Строковая - для имени
            $table->text('description'); // Описание
            $table->date('dateBirth'); // Дата рождения

            $table->boolean('isDirector')->default(0);
            $table->boolean('isProduser')->default(0);
            $table->boolean('isActor')->default(0);
            $table->boolean('isScreenWriter')->default(0);
            $table->boolean('isMusic')->default(0);

            $table->text('meta_title');
            $table->text('meta_description');
            $table->text('meta_keywords');
            $table->enum('status', ['PUBLISHED', 'DRAFT', 'PENDING'])->default('DRAFT');

            $table->integer('author_id')->references('id')->on('users');
            $table->integer('last_author_id')->references('id')->on('users');
            $table->string('slug')->unique();

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
        Schema::dropIfExists('peoples');
    }
}
