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
        Schema::create('classroom_posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('classroom_id')
            ->index()
            ->constrained()
            ->onDelete('cascade');
            $table->string('type');
            $table->string('topic')->nullable();
            $table->unsignedBigInteger('topic_id')->nullable();
            $table->foreign('topic_id')
            ->references('id')
            ->on('topics')
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
            $table->boolean('pin_status')->nullable();
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
        Schema::dropIfExists('classroom_posts');
    }
};
