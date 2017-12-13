<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGrainTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grain_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('--view-path=admin --controller-namespace=Admin --route-group=admin --form-helper=html

php artisan crud:generate grain --fields=name')->nullable();
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
        Schema::drop('grain_types');
    }
}
