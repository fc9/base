<?php

use Illuminate\Database\Seeder;

use \Modules\Register\Database\Seeders\RegisterDatabaseSeeder;
use \Modules\Network\Database\Seeders\NetworkDatabaseSeeder;
use \Modules\Bank\Database\Seeders\BankDatabaseSeeder;
use \Modules\Store\Database\Seeders\StoreDatabaseSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        # php artisan db:seed
        # php artisan migrate:refresh --seed --drop-views
        $this->call(RegisterDatabaseSeeder::class);
        $this->call(NetworkDatabaseSeeder::class);
        $this->call(BankDatabaseSeeder::class);
        $this->call(StoreDatabaseSeeder::class);

//        $this->call(UsersTableSeeder::class);
    }
}
