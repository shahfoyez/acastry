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
        Schema::create('assignment_notifications', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('member_id')->nullable();
            $table->foreign('member_id')
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

            $table->unsignedBigInteger('classroom_id')->nullable();
            $table->foreign('classroom_id')
            ->references('id')
            ->on('classrooms')
            ->onDelete('cascade')
            ->onUpdate('No Action');
            $table->integer('notifications');
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
        Schema::dropIfExists('assignment_notifications');
    }
};
