<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCordinateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('cordinate'))
        {
            Schema::create('cordinate', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('country_id')->unsigned();
                $table->string('x');
                $table->string('y');
                $table->unique('country_id');
                $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade')->onUpdate('cascade');

                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cordinate');
    }
}
