<?php

namespace Modules\Network\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class NetworkDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        #Model::unguard();
        $this->call(NodeTableSeeder::class);
        $this->call(NodeUnilevelTableSeeder::class);
        $this->call(NodeBinaryTableSeeder::class);
    }
}
