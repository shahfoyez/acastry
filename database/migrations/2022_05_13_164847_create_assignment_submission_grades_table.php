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
        Schema::create('assignment_submission_grades', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('assignment_submission_id');
            $table->foreign('assignment_submission_id')
                ->references('id')
                ->on('assignment_submissions')
                ->onDelete('cascade')
                ->onUpdate('No Action');
            $table->integer('points');
            $table->unsignedBigInteger('added_by');
            $table->foreign('added_by')
                ->references('id')
                ->on('users')
                ->onDelete('cascade')
                ->onUpdate('No Action');
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->foreign('updated_by')
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
        Schema::dropIfExists('assignment_submission_grades');
    }
};
