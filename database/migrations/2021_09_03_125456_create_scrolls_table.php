<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScrollsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scrolls', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('type');
            $table->boolean('head')->default(0);
            $table->boolean('chest')->default(0);
            $table->boolean('legs')->default(0);
            $table->boolean('hands')->default(0);
            $table->boolean('feet')->default(0);
            $table->boolean('weapon')->default(0);
            $table->boolean('belt')->default(0);
            $table->boolean('rings')->default(0);
            $table->boolean('earrings')->default(0);
            $table->boolean('brooch')->default(0);
            $table->boolean('necklace')->default(0);
            $table->boolean('artifact')->default(0);
            $table->boolean('totem')->default(0);
            $table->integer('ats')->default(0);
            $table->integer('bal')->default(0);
            $table->integer('crit')->default(0);
            $table->integer('att')->default(0);
            $table->integer('matt')->default(0);
            $table->integer('def')->default(0);
            $table->integer('cres')->default(0);
            $table->integer('str')->default(0);
            $table->integer('agi')->default(0);
            $table->integer('int')->default(0);
            $table->integer('wil')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('scrolls');
    }
}
