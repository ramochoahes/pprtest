<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuizzesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quizzes', function (Blueprint $table) {
          $table->increments('id');
          $table->string('comp');
          $table->text('question');
          $table->string('answer');
          $table->text('explanation')->nullable();
          $table->text('choice1');
          $table->text('choice2');
          $table->text('choice3');
          $table->text('choice4');
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
        Schema::drop('quizzes');
    }
}
