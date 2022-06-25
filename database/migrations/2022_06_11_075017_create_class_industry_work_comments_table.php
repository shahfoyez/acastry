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
        Schema::create('class_industry_work_comments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ciw_id');
            $table->foreign('ciw_id')
                ->references('id')
                ->on('classroom_industry_works')
                ->onDelete('cascade')
                ->onUpdate('No Action');
            $table->string('comment');
            $table->unsignedBigInteger('added_by');
            $table->foreign('added_by')
                ->references('id')
                ->on('users')
                ->onDelete('cascade')
                ->onUpdate('No Action');
            $table->string('status')->nullable();
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
        Schema::dropIfExists('class_industry_work_comments');
    }
};
