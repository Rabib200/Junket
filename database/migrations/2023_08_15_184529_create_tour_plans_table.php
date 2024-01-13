<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTourPlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tour_plans', function (Blueprint $table) {
            $table->id();
            $table->string('group_name');
            $table->string('location');
            $table->text('short_description');
            $table->text('long_description');
            $table->string('image');
            $table->text('cost_description');
            $table->integer('total_cost');
            $table->integer('booking_cost');
            $table->integer('capacity');
            $table->string('status');
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
        Schema::dropIfExists('tour_plans');
    }
}