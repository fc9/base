<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('state', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->char('country_iso_code', 2)->index()->comment('ISO 3166 Primary Country Code');
            $table->unsignedBigInteger('capital_id')->index()->comment('Primary City Id')->nullable();
            $table->char('abbreviation', 6)->nullable();
            $table->string('full_name');
            $table->timestamps();

            $table->foreign('country_iso_code')->references('iso_code')->on('country')->onUpdate('cascade');
            $table->foreign('capital_id')->references('id')->on('city')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('state');
    }
}
