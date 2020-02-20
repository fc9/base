<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNodeUnilevelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $config = config('network');
        $status = improve($config['node.status']);
        unset($config);

        Schema::create('node_unilevel', function (Blueprint $table) use ($status) {
            $table->unsignedBigInteger('node_id')->index()->unique();
            $table->unsignedBigInteger('parent_node_id')->index()->nullable();
            $table->unsignedBigInteger('indication_order')->autoIncrement()->unique();
            $table->string('lineage', 10000)->nullable(); # 2/45/465...
            $table->enum('status', $status->values())->default($status->aspirant);
            $table->timestamps();

            $table->foreign('node_id')->references('id')->on('node');
            $table->foreign('parent_node_id')->references('node_id')->on('node_unilevel');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('node_unilevel');
    }
}
