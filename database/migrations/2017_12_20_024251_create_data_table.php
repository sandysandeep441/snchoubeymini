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
            $table->integer('type_id')->nullable();
            $table->integer('user_id')->nullable();
            $table->integer('qty')->nullable();
            $table->string('credited')->nullable();
            $table->string('polished')->nullable();
//            $table->foreign('type_id')->references('id')->on('grains');
//            $table->foreign('cust_id')->references('id')->on('customers');
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
        Schema::drop('data');
    }
}
