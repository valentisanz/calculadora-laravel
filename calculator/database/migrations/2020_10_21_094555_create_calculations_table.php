<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalculationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calculations', function (Blueprint $table) {
            $table->id();
            $table->integer('num1');
            $table->integer('num2');
            $table->integer('sumResult');
            $table->integer('subsResult');
            $table->integer('multResult');
            $table->integer('divResult');
            $table->string('firstEquationResult');
            $table->string('secondEquationResult');
            $table->string('entryDate');
            $table->string('solveDate');
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
        Schema::dropIfExists('calculations');
    }
}
