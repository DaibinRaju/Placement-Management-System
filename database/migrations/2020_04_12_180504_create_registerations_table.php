<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegisterationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registerations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('drive_id');
            $table->unsignedBigInteger('user_id');
            $table->text('data');
            $table->timestamps();

            $table->foreign('drive_id')
            ->references('id')
            ->on('drives')
            ->onDelete('cascade');
    
            $table->foreign('user_id')
            ->references('id')
            ->on('users')
            ->onDelete('cascade');

            //$table->unique('drive_id','user_id');
        });

       
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registerations');
    }
}
