<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRwTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rw', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('rw')->nullable();
            $table->string('rw1')->nullable();
            $table->string('rt1')->nullable();
            $table->string('rt2')->nullable();
            $table->string('rt3')->nullable();
            $table->string('rt4')->nullable();
            $table->string('rt5')->nullable();
            $table->string('rt6')->nullable();
            $table->string('rt7')->nullable();
            $table->string('rt8')->nullable();
            $table->string('rt9')->nullable();
            $table->string('jlhrw')->nullable();
            $table->string('jlhrt')->nullable();
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
        Schema::dropIfExists('rw');
    }
}
