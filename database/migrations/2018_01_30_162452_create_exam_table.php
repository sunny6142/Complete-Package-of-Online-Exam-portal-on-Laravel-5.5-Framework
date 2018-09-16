<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exam', function (Blueprint $table) {
          
                $table->increments('examcode');
                $table->string('examtitle',100);
                $table->TEXT('publish')->nullable();
                $table->string('tname',100);
                $table->TEXT('Result_DB')->nullable();
                $table->string('category',100);
                $table->string('examtime');
                $table->string('admin_id',100);
                $table->string('admin_email',100);
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
        Schema::dropIfExists('exam');
    }
}
