<?php

namespace Modules\Register\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Config;
use Modules\Register\Entities\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $activeIn = date('Y/m/d H:i:s', strtotime('+ 1 second'));
        $createdIn = date('Y/m/d H:i:s');

        User::insert([

            [
                'id' => 1,
                'indicator_id' => null,
                'username' => 'morenwm',
                'email' => 'morenwm@gmail.com',
                'email_verified_at' => $activeIn,
                'password' => Hash::make(config('register.user.password.superuser')),
                'status' => config('register.user.status.active'),
                'access_profile' => config('register.user.access_profile.superuser'),
                'active_at' => $activeIn,
                'created_at' => $createdIn,
            ],
            [
                'id' => 2,
                'indicator_id' => null,
                'username' => 'admin',
                'email' => 'admin@tester.com',
                'email_verified_at' => $activeIn,
                'password' =>  Hash::make(config('register.user.password.admin')),
                'status' => config('register.user.status.active'),
                'access_profile' => config('register.user.access_profile.admin'),
                'active_at' => $activeIn,
                'created_at' => $createdIn,
            ],
            [
                'id' => 3,
                'indicator_id' => 2,
                'username' => 'brunas',
                'email' => 'brunasouza@tester.com',
                'email_verified_at' => $activeIn,
                'password' => Hash::make(config('register.user.password.tester')),
                'status' => config('register.user.status.active'),
                'access_profile' => config('register.user.access_profile.member'),
                'active_at' => $activeIn,
                'created_at' => $createdIn,
            ],

        ]);
    }
}
