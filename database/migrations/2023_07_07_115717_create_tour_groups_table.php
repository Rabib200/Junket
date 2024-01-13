<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTourGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tour_groups', function (Blueprint $table) {
            $table->id();
            $table->string('group_name')->unique();
            $table->string('owner_name');
            $table->string('image');
            $table->string('email')->unique();
            $table->string('phone')->unique();
            $table->string('password');
            $table->text('location');
            $table->text('about_us');
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
        Schema::dropIfExists('tour_groups');
    }
}