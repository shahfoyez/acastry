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
        Schema::create('i_w_submission_attachments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('iws_id');
            $table->foreign('iws_id')
                ->references('id')
                ->on('industry_work_submissions')
                ->onDelete('cascade')
                ->onUpdate('No Action');
            $table->string('type');
            $table->string('path');
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
        Schema::dropIfExists('i_w_submission_attachments');
    }
};
