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
        Schema::create('industry_work_submissions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('iw_id');
            $table->foreign('iw_id')
                ->references('id')
                ->on('industry_works')
                ->onDelete('cascade')
                ->onUpdate('No Action');
            $table->unsignedBigInteger('ciw_id');
            $table->foreign('ciw_id')
                ->references('id')
                ->on('classroom_industry_works')
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
            $table->string('status');
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
        Schema::dropIfExists('industry_work_submissions');
    }
};
