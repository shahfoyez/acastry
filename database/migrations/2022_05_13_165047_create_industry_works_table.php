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
        Schema::create('industry_works', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('instruction')->nullable();;
            $table->integer('points')->nullable();
            $table->dateTime('due_date_time')->nullable();
             $table->string('subject');
            $table->string('keyword')->nullable();
            $table->unsignedBigInteger('added_by');
            $table->foreign('added_by')
                ->references('id')
                ->on('users')
                ->onDelete('cascade')
                ->onUpdate('No Action');
            $table->integer('added')->nullable();
            $table->integer('views')->nullable();
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
        Schema::dropIfExists('industry_works');
    }
};
