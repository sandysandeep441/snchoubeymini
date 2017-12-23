<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('type_id')->nullable();
            $table->integer('user_id')->nullable();
            $table->string('qty')->nullable();
            $table->string('credited')->nullable();
            $table->foreign('type_id')->references('id')->on('grains')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('cust_id')->references('id')->on('customers')->onDelete('cascade')->onUpdate('cascade');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('data');
    }
}
