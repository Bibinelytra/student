<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mark', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('student_id');
            $table->string('term');
            $table->integer('maths');
            $table->integer('science');
            $table->integer('history');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mark');
    }
}
