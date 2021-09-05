<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\Types\Nullable;

class CreateAccessoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accessories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('type');
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
            $table->string('set')->nullable();
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
        Schema::dropIfExists('accessories');
    }
}
