<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('city', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->char('country_iso_code', 2)->index()->comment('ISO 3166 Primary Country Code')->default('00');
            $table->unsignedBigInteger('state_id')->index()->nullable();
            $table->string('full_name');
            $table->timestamps();

            $table->foreign('country_iso_code')->references('iso_code')->on('country')->onUpdate('cascade');
            $table->foreign('state_id')->references('id')->on('state')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('city');
    }
}
