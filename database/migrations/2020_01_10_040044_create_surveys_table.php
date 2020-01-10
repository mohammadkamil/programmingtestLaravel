<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSurveysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surveys', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('totalquestion1')->default(0);
            $table->integer('totalanswer1a')->default(0);
            $table->integer('totalanswer1b')->default(0);
            $table->integer('totalanswer1c')->default(0);
            $table->integer('totalanswer1d')->default(0);


            $table->integer('totalquestion2')->default(0);
            $table->integer('totalanswer2a')->default(0);
            $table->integer('totalanswer2b')->default(0);
            $table->integer('totalanswer2c')->default(0);
            $table->integer('totalanswer2d')->default(0);
            $table->integer('totalquestion3')->default(0);
            $table->integer('totalanswer3a')->default(0);
            $table->integer('totalanswer3b')->default(0);
            $table->integer('totalanswer3c')->default(0);
            $table->integer('totalanswer3d')->default(0);
            $table->integer('totalquestion4')->default(0);
            $table->integer('totalanswer4a')->default(0);
            $table->integer('totalanswer4b')->default(0);

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
        Schema::dropIfExists('surveys');
    }
}
