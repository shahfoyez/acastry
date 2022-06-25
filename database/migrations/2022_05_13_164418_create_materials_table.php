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
        Schema::create('materials', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('instruction')->nullable();

            $table->unsignedBigInteger('post_id');
            $table->foreign('post_id')
                ->references('id')
                ->on('classroom_posts')
                ->onDelete('cascade')
                ->onUpdate('No Action');

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
            $table->string('topic')->nullable();
            $table->unsignedBigInteger('topic_id')->nullable();
            $table->foreign('topic_id')
            ->references('id')
            ->on('topics')
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
        Schema::dropIfExists('materials');
    }
};
