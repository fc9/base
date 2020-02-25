<?php

namespace Modules\Network\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Config;
use Modules\Network\Entities\NodeBinary;

class NodeBinaryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        NodeBinary::insert([
            [
                'node_id' => 2,
                'parent_node_id' => null,
                'lineage' => null,
                'fixed_leg' => Config::get('network.binary.leg.left'),
                'work_leg' => Config::get('network.binary.leg.balanced'),
                'node_status' => Config::get('network.node.status.added'),
                'bonus_status' => Config::get('network.bonus.status.active'),
            ],
//            [
//                'node_id' => 3,
//                'parent_node_id' => 2,
//                'lineage' => '[2]',
//                'fixed_leg' => Config::get('network.binary.leg.left'),
//                'work_leg' => Config::get('network.binary.leg.right'),
//                'node_status' => Config::get('network.node.status.added'),
//                'bonus_status' => Config::get('network.bonus.status.active'),
//            ],
        ]);
    }
}
