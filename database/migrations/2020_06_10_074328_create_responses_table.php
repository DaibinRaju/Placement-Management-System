<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResponsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('responses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('exam_id');
            $table->unsignedBigInteger('user_id');
            $table->integer('score');
            $table->integer('q_count');
            $table->text('qid');
            $table->text('qst');
            $table->timestamps();

            $table->foreign('exam_id')
                ->references('id')
                ->on('exams')
                ->onDelete('cascade');

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('responses');
    }
}
