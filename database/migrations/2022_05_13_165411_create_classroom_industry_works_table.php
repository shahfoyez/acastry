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
        Schema::create('classroom_industry_works', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('iw_id');
            $table->foreign('iw_id')
                ->references('id')
                ->on('industry_works')
                ->onDelete('cascade')
                ->onUpdate('No Action');
            $table->unsignedBigInteger('classroom_id');
            $table->foreign('classroom_id')
                ->references('id')
                ->on('classrooms')
                ->onDelete('cascade')
                ->onUpdate('No Action');
            $table->unsignedBigInteger('added_by');
            $table->foreign('added_by')
                ->references('id')
                ->on('users')
                ->onDelete('cascade')
                ->onUpdate('No Action');
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
        Schema::dropIfExists('classroom_industry_works');
    }
};
