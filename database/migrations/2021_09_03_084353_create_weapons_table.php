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
            $table->integer('ats');
            $table->integer('bal');
            $table->integer('crit');
            $table->integer('att')->nullable();
            $table->integer('matt')->nullable();
            $table->integer('str')->nullable();
            $table->integer('agi')->nullable();
            $table->integer('int')->nullable();
            $table->integer('wil')->nullable();
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
        Schema::dropIfExists('weapons');
    }
}
