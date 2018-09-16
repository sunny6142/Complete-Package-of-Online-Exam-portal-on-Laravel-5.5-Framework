<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExamQuestionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exam_question', function (Blueprint $table) {
            $table->increments('id');
            $table->string('owner_email',100);
            $table->string('owner_id',100);
            $table->string('examcode'); 
            $table->string('subject_code'); 
            $table->string('subject');
            $table->TEXT('image')->nullable();
            $table->string('category');  
            $table->string('ques_no')->nullable();
            $table->TEXT('question',10000);
            $table->TEXT('option_A',1000);
            $table->TEXT('option_B',1000);
            $table->TEXT('option_C',1000);
            $table->TEXT('option_D',1000);
            $table->float('marks');
            $table->float('negative_marks');
            $table->TEXT('correct_option');
            $table->TEXT('correct_answer')->nullable();
            $table->TEXT('level');
            $table->TEXT('solution',10000)->nullable();
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
        Schema::dropIfExists('exam_question');
    }
}
