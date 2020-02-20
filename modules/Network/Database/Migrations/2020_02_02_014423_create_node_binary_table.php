<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNodeBinaryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $config = config('network');
        $fixed_leg = improve(config('binary.fixed_leg'));
        $work_leg = improve(config('binary.work_leg'));
        $status = improve(config('binary.node.status'));
        unset($config);

        Schema::create('node_binary', function (Blueprint $table) use ($fixed_leg, $work_leg, $status) {
            $table->unsignedBigInteger('node_id')->index()->unique();
            $table->unsignedBigInteger('parent_node_id')->index()->nullable();
            $table->unsignedBigInteger('left_child_user_id')->nullable(); #TODO: tmp
            $table->unsignedBigInteger('right_child_user_id')->nullable(); #TODO: tmp
            $table->string('lineage', 100000)->nullable(); # 2/15/132...
            $table->enum('fixed_leg', $fixed_leg->values())->default($fixed_leg->undefined);
            $table->enum('work_leg', $work_leg->values())->default($work_leg->balanced);
            $table->enum('status', $status->values())->default($status->aspirant);
            $table->integer('left_pv')->default(0); #TODO: tmp
            $table->integer('right_pv')->default(0); #TODO: tmp
            $table->integer('left_count')->default(0);
            $table->integer('right_count')->default(0);
            $table->timestamps();

            $table->foreign('node_id')->references('id')->on('node');
            $table->foreign('parent_node_id')->references('node_id')->on('node_binary');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('node_binary');
    }
}
