<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $config = config('register.user');
        $status = improve($config['status']);
        $access_profile = improve($config['access_profile']);
        unset($config);

        Schema::create('user', function (Blueprint $table) use ($status, $access_profile) {
            $table->bigIncrements('id')->unsigned();
            $table->unsignedBigInteger('indicator_id')->index()->nullable()->comment('Indicator User Id');
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->enum('status', $status->values())->default($status->active);
            $table->enum('access_profile', $access_profile->values())->default($access_profile->partner);
            $table->timestamp('active_at')->useCurrent();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('indicator_id')->references('id')->on('user')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user');
    }
}
