<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('trainings', function (Blueprint $table) {
        //     $table->bigIncrements('id');
        //     $table->timestamps();
        // });

        Schema::create('trainings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('training_name');
            $table->string('trainer');
            $table->text('description');
            $table->integer('days');
            $table->string('dates')->nullable();
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
        Schema::dropIfExists('trainings');
    }
}
