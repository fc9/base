<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $type = improve(config('register.address.type'));

        Schema::create('address', function (Blueprint $table) use ($type) {
            $table->bigIncrements('id')->unsigned();
            $table->unsignedBigInteger('person_id')->index();
            $table->unsignedInteger('country')->index()->comment('Geoname Code Country');
            $table->unsignedInteger('state')->index()->comment('Geoname Code State'); #province
            $table->unsignedBigInteger('city')->index()->comment('Geoname Code City');
            $table->string('zip_code', 16);
            $table->string('street');
            $table->string('number');
            $table->string('sector')->nullable();
            $table->string('complement')->nullable();
            $table->enum('type', $type->values())->default($type->primary);
            $table->timestamps();

            $table->foreign('person_id')->references('id')->on('person')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('address');
    }
}
