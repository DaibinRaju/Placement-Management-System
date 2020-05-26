<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainingFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('training_files', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('billname')->nullable();
            $table->string('billsize')->nullable();
            $table->string('billpath')->nullable();
            $table->string('upload_date')->nullable();
            $table->string('uploaded_by')->nullable();
            $table->string('training_id')->nullable();
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
        Schema::dropIfExists('training_files');
    }
}
