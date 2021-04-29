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
            $table->id();
            $table->string('board');
            $table->string('name');
            $table->integer('grade_1')->nullable();
            $table->integer('grade_2')->nullable();
            $table->integer('grade_3')->nullable();
            $table->integer('grade_4')->nullable();
            $table->float('average')->nullable();
            $table->string('final')->nullable();
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
