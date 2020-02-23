<?php

namespace Modules\Register\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class RegisterDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(UserTableSeeder::class);
        $this->call(PersonTableSeeder::class);
        $this->call(MembershipTableSeeder::class);

        //$this->call(AccessProfileTableSeeder::class);
        //$this->call(GraduateTableSeeder::class);
    }
}
