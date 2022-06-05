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
        Schema::create('genereal_post_attachments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('general_post_id');
            $table->foreign('general_post_id')
                ->references('id')
                ->on('general_posts')
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
        Schema::dropIfExists('genereal_post_attachments');
    }
};
