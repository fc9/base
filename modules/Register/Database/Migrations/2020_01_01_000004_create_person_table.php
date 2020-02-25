<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $type = improve(config('register.person.type'));

        Schema::create('person', function (Blueprint $table) use ($type) {
            $table->bigIncrements('id')->unsigned();
            $table->unsignedBigInteger('user_id')->index()->unique();
            $table->string('firstname');
            $table->string('lastname')->nullable();
            $table->string('avatar')->nullable();
            $table->datetime('birth_date')->nullable();
            $table->enum('type', $type->values())->default($type->physical);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('user')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('person');
    }
}
