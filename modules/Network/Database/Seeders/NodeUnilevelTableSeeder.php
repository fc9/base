<?php

namespace Modules\Network\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Config;
use Modules\Network\Entities\NodeUnilevel;

class NodeUnilevelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        NodeUnilevel::insert([
            [
                'node_id' => 2,
                'parent_node_id' => null,
                'lineage' => null,
                'node_status' => Config::get('network.node.status.added'),
                'bonus_status' => Config::get('network.bonus.status.active'),
            ],
//            [
//                'node_id' => 3,
//                'parent_node_id' => 2,
//                'lineage' => '[2]',
//                'node_status' => Config::get('network.node.status.added'),
//                'bonus_status' => Config::get('network.bonus.status.active'),
//            ],
        ]);
    }
}
