<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGoalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ab_goals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('hit')->default(0);
            $table->integer('experiment_id')->unsigned();
            $table->foreign('experiment_id')->references('id')->on('ab_experiments');
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
        Schema::dropIfExists('ab_goals');
    }
}
