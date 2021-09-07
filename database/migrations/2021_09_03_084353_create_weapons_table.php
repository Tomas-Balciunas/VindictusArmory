<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWeaponsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('weapons', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->boolean('quality');
            $table->integer('ats');
            $table->integer('bal');
            $table->integer('crit');
            $table->integer('att');
            $table->integer('matt');
            $table->integer('str');
            $table->integer('agi');
            $table->integer('int');
            $table->integer('wil');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('weapons');
    }
}
