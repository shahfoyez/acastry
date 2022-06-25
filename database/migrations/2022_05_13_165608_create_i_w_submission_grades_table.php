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
        Schema::create('i_w_submission_grades', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('iws_id');
            $table->foreign('iws_id')
                ->references('id')
                ->on('industry_work_submissions')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->integer('t_grade')->nullable();
            $table->integer('i_grade')->nullable();
            $table->unsignedBigInteger('tg_added_by')->nullable();
            $table->foreign('tg_added_by')
                ->references('id')
                ->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->unsignedBigInteger('tg_updated_by')->nullable();
            $table->foreign('tg_updated_by')
                ->references('id')
                ->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');
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
        Schema::dropIfExists('i_w_submission_grades');
    }
};
