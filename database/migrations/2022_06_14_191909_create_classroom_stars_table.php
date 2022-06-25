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
        Schema::create('classroom_stars', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('classroom_id')->nullable();
            $table->foreign('classroom_id')
            ->references('id')
            ->on('classrooms')
            ->onDelete('cascade')
            ->onUpdate('No Action');

            $table->unsignedBigInteger('assignment_id')->nullable();
            $table->foreign('assignment_id')
            ->references('id')
            ->on('assignments')
            ->onDelete('cascade')
            ->onUpdate('No Action');
            $table->unsignedBigInteger('ciw_id')->nullable();
            $table->foreign('ciw_id')
            ->references('id')
            ->on('classroom_industry_Works')
            ->onDelete('cascade')
            ->onUpdate('No Action');


            $table->unsignedBigInteger('star_id')->nullable();
            $table->foreign('star_id')
            ->references('id')
            ->on('classroom_members')
            ->onDelete('cascade')
            ->onUpdate('No Action');

            $table->unsignedBigInteger('added_by')->nullable();
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
        Schema::dropIfExists('classroom_stars');
    }
};
