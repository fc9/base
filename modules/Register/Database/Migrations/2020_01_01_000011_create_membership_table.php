<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembershipTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $config = config('register.membership');
        $contract_read = improve($config['contract_read']);
        $graduate = improve($config['graduate']);
        $status = improve($config['status']);
        unset($config);

        Schema::create('membership', function (Blueprint $table) use ($contract_read, $status, $graduate) {
            $table->unsignedBigInteger('company_id')->index()->comment('Juridical Person Id')->nullable()->default(2);
            $table->unsignedBigInteger('person_id')->index()->comment('Physical Person Id');
            $table->enum('contract_read', $contract_read->values())->default($contract_read->yes);
            $table->enum('graduate', $graduate->values())->default($graduate->partner);
            $table->enum('status', $status->values())->default($status->active);
            $table->timestamps();

            $table->foreign('company_id')->references('id')->on('person')->onUpdate('cascade');
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
        Schema::dropIfExists('membership');
    }
}
