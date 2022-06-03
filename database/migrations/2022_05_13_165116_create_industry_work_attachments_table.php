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
        Schema::create('industry_work_attachments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('iw_id');
            $table->foreign('iw_id')
                ->references('id')
                ->on('industry_works')
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
        Schema::dropIfExists('industry_work_attachments');
    }
};
