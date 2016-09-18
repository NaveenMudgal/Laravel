<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIncomeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('income', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->bigInteger('salary');
            $table->bigInteger('shares');
            $table->bigInteger('business');
            $table->bigInteger('rent');
            $table->bigInteger('interest');
            $table->bigInteger('others');
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
        Schema::drop('income');
    }
}
