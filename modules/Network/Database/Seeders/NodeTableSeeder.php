<?php

namespace Modules\Network\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Network\Entities\Node;

class NodeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Node::insert([
            ['id' => 2],
//            ['id' => 3],
        ]);
    }
}
