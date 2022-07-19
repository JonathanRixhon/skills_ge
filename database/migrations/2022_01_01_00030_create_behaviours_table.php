<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('behaviours', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('text');
            $table->tinyInteger('level');
            $table->unsignedBigInteger('knowledge_id');

            $table->foreign('knowledge_id')->references('id')->on('knowledge')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('behaviours');
    }
};
